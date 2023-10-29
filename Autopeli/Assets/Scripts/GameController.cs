using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;
using System.IO;
using TMPro;
using UnityEngine.Events;
using UnityEngine.EventSystems;
using System;
using System.Linq;

public class GameController: MonoBehaviour
{
    List<Kysymys> listQuestions;

    private bool oikeaVastaus;
    private int index;
    private int index2;
    private int LevelMaterialRead;
    public int Attempts = 3;
    
    public TextMeshProUGUI ScoreText;
    public TextMeshProUGUI Questions;
    // public TextMeshProUGUI NameBox;
    public TextMeshProUGUI AnswerText;

    public TextMeshProUGUI AnswerText2;
    public TextMeshProUGUI RightOrWrongText;
    public TextMeshProUGUI RightOrWrongInfo;
    public GameObject RightOrWrongArea;
    public GameObject QuestionArea;
    public GameObject Timer;
    public GameObject AnswerButtons;
    public GameObject dialogueArea;
    public DialogueSystem dialogueSystem;
    List<Answers> AnswersList;
    List<Info> QuestionInfo;
    
    // Start is called before the first frame update
    void Start()
    {  
        GlobalScore.Score = 0;
        ReadData();
        ReadAnswers();
        RightOrWrong();
        ShowQuestions();
        PrintAnswer();
        //Debug.Log("Kysymyksiä: " + (listQuestions.Count -  1));
        //NameBox.text = PlayerPrefs.GetString("PlayerName");

    }

    public void ReadData()
    {
        listQuestions = new List<Kysymys>();
        TextAsset Data = Resources.Load<TextAsset>("kysymykset") as TextAsset;
        string row = "";
        int rows = 0;

        // luetaan tiedosto läpi rivi kerrallaan
        StringReader file = new StringReader(Data.text);
        while ((row = file.ReadLine()) != null)
        {
            rows++;
            // Debug.Log(rows + "\t" + row);
            try
            {
                // puretaan rivi ;-merkkien kohdalta
                string[] fields = row.Split(';');
 
                Kysymys h = new Kysymys();

                h.kysymys = fields[0];

                h.vastaus = bool.Parse(fields[1]);

                h.level = fields[2];

                listQuestions.Add(h);

            }
            catch (System.Exception e)
            {
                Debug.Log(e.Message.ToString());
            }
        }

        file.Close();
    }

    public void ReadAnswers()
    {
        // lukee tiedostosta vastaus vaihtoehdot
        AnswersList = new List<Answers>();
        TextAsset Data = Resources.Load<TextAsset>("answers") as TextAsset;
        string row = "";
        int rows = 0;

        StringReader file = new StringReader(Data.text);
        while ((row = file.ReadLine()) != null)
        {
            rows++;
            try
            {
                string[] fields = row.Split(';');

                Answers h = new Answers();

                h.answer1 = fields[0];
                h.answer2 = fields[1];
                h.level = fields[2];

                AnswersList.Add(h);

            }
            catch (System.Exception e)
            {
                Debug.Log(e.Message.ToString());
            }
        }
        file.Close();
    }

    public void SaveData()
    {
        string fileName = "scores.csv";
        string path = "./Assets/Resources/";
        // haetaan kirjoitettavat tiedot:
        string aika = System.DateTime.Now.ToString("yyyy-MM-dd");
        string name = PlayerPrefs.GetString("PlayerName");
        string sceneName = UnityEngine.SceneManagement.SceneManager.GetActiveScene().name;
        StreamWriter writer = new StreamWriter(path + fileName, true);
        // kirjoitetaan rivi tekstiä, erotinmerkkinä ;
        string rivi = name + ";" + aika + ";" + GlobalScore.Score + ";" + sceneName;
        writer.WriteLine(rivi);
        Debug.Log(rivi+"SaveData");
        writer.Close();
    }

    public void RightOrWrong()
    {
        // lukee tiedostosta selitykset oikeille ja väärille vastauksille
        QuestionInfo  = new List<Info>();
        TextAsset Data = Resources.Load<TextAsset>("rightorwrong") as TextAsset;
        string row = "";
        int rows = 0;

        StringReader file = new StringReader(Data.text);
        while ((row = file.ReadLine()) != null)
        {
            rows++;
            try
            {
                string[] fields = row.Split(';');

                Info h = new Info();

                h.explanation = fields[0];
                h.level = fields[1];

                QuestionInfo.Add(h);

            }
            catch (System.Exception e)
            {
                Debug.Log(e.Message.ToString());
            }
        }
        file.Close();
    }

    
    // Metodi, joka katsoo oliko kysymys oikein vai väärin  
    public void answer(bool vastaus)
    {
        Kysymys x = listQuestions[index];
        //Debug.Log(listQuestions[index]);
        //Debug.Log("vastaus: " + x.vastaus + " kysymys: " + x.kysymys);
        Info y = QuestionInfo[index];
        Scene CurrentScene = SceneManager.GetActiveScene();

        //Tää Saattaa rikkoo
        if (listQuestions.Count == 0 || GlobalScore.Score == (listQuestions.Count - 1) || listQuestions.Count == index)
        {
            SaveData();
            SceneManager.LoadScene("GameOverScene");
            GlobalScore.Score = 0;
        }
        else
        {
            ShowQuestions();
            PrintAnswer();
        }

        if (vastaus == x.vastaus)
        {
            Debug.Log("vastattiin oikein");
            GlobalScore.Score++;
            ScoreText.text = "Pisteet: " + GlobalScore.Score + " / " + (listQuestions.Count - 1);
            QuestionArea.SetActive(false);
            Timer.SetActive(false);
            AnswerButtons.SetActive(false);
            dialogueArea.SetActive(false);
            Time.timeScale = 0f;
            RightOrWrongArea.SetActive(true);
            while(true)
            {
                y = QuestionInfo[index];
                index++;
                //Debug.Log(listQuestions.Count);
                if (CurrentScene.name != x.level || CurrentScene.name != y.level)
                {
                    listQuestions.RemoveAt(index);
                    AnswersList.RemoveAt(index); 
                    QuestionInfo.RemoveAt(index);
                    continue;
                }   
                //Debug.Log(listQuestions.Count);
                //Debug.Log(y.level + " " + CurrentScene.name);
                while(CurrentScene.name == y.level)
                {
                    RightOrWrongText.text = "Oikein!";
                    RightOrWrongInfo.text = y.explanation;
                    LevelMaterialRead++;
                    break;
                }
              return;
            }
        }
        else
        {
            Debug.Log("vastattiin väärin");
            Attempts--;
            ScoreText.text = "Pisteet: " + GlobalScore.Score + " / " + (listQuestions.Count - 1);
            QuestionArea.SetActive(false);
            Timer.SetActive(false);
            AnswerButtons.SetActive(false);
            dialogueArea.SetActive(false);
            Time.timeScale = 0f;
            RightOrWrongArea.SetActive(true);
            while(true)
            {
                y = QuestionInfo[index];
                index++;
                //Debug.Log(listQuestions.Count);

                if (CurrentScene.name != x.level || CurrentScene.name != y.level)
                {
                    listQuestions.RemoveAt(index);
                    AnswersList.RemoveAt(index); 
                    QuestionInfo.RemoveAt(index);
                    continue;
                } 
                //Debug.Log(y.level + " " + CurrentScene.name);
                while(CurrentScene.name == y.level)
                {
                    RightOrWrongText.text = "Väärin!";
                    RightOrWrongInfo.text = y.explanation;
                    LevelMaterialRead++;
                    break;
                }
               return;
            }
        } 
    }
    // Katsoo onko enempää pelattavaa, jos ei tallentaa pisteet ja lataa gameover scenen
    public void QuitOrContinue()
    {
        string currentSceneName = SceneManager.GetActiveScene().name;
        Scene CurrentScene = SceneManager.GetActiveScene();
        // laskee kuinka monta selitystä on tasolla ja sen jälkeen katsoo kuinka moni niistä on luettu. Jos on luettu kaikki, tallentaa pisteet ja lataa gameover scenen, muuten jatkaa peliä.
        if (LevelMaterialRead == QuestionInfo.Count(x => x.level == CurrentScene.name))
        {
            switch (currentSceneName)
            {
                case "Day1":
                    GlobalScore.Score2 += 1;
                    break;
                case "Day2":
                    GlobalScore.Score2 += 2;
                    break;
                case "Day3":
                    GlobalScore.Score2 += 3;
                    break;
                case "Day4":
                    GlobalScore.Score2 += 4;
                    break;
                case "Day5":
                    GlobalScore.Score2 += 5;
                    break;
                case "Day6":
                    GlobalScore.Score2 += 6;
                    break;
                case "Day7":
                    GlobalScore.Score2 += 7;
                    break;
                default:
                    break;
            }
            SaveData();
            SceneManager.LoadScene("GameOverScene");
        }
        else 
        {
            dialogueSystem.ContinueDialogue();
        }

        Debug.Log("Scene on "+currentSceneName+" tällä hetkellä");
        Debug.Log("Score 2 on "+GlobalScore.Score2+" tällä hetkellä");
    }

    public void ShowQuestions()
    {
        Kysymys x = listQuestions[index];
        Scene CurrentScene = SceneManager.GetActiveScene();
        while(true) 
        {
            x = listQuestions[index];
           // Debug.Log("Kysymysten index: " + index + " kysymys: " + x.kysymys + " vastaus: " + x.vastaus);
            if(CurrentScene.name == x.level)
            {
               // Debug.Log("Kysymysten index: " + index + " kysymys: " + x.kysymys + " vastaus: " + x.vastaus + "( if lause)");
                Questions.text = x.kysymys;
                oikeaVastaus = x.vastaus;
                break;
            }
            else {
                index++;
            };
        }
    }

    // Tulostaa eri vastaus vaihtoehdot nappeihin
    public void PrintAnswer()
    {
        Answers x = AnswersList[index];
        Scene CurrentScene = SceneManager.GetActiveScene();
        while(true)
        {
            x = AnswersList[index];
            if(CurrentScene.name == x.level)
            {
               // Debug.Log("Vastausten index: " + index + " vastaus 1: " +  x.answer1 + " vastaus 2: " + x.answer2 + "( if lause)");
                AnswerText.text = x.answer1;
                AnswerText2.text = x.answer2;
                break;
            }
            else {
                index++;
            }
        } 
    }
}

public class Kysymys
{
    public string kysymys { get; set; }
    public bool vastaus { get; set; }
    public string level { get; set; }
}

public class Answers
{
    public string answer1 { get; set; }
    public string answer2 { get; set; }
    public string level { get; set; }
}

public class Info
{
    public string explanation { get; set; }
    public string level { get; set; }
}