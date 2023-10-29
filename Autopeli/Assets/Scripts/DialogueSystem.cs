using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using TMPro;
using System.Linq;
using System.IO;
using UnityEngine.SceneManagement;

public class DialogueSystem : MonoBehaviour
{
    public TextMeshProUGUI dialogueText;
    public GameObject dialogueArea;
    public GameObject QuestionArea;
    public GameObject Timer;
    public GameObject ButtonBox;
    public GameObject RightOrWrongArea;
    private int index;
    private int sentencesRead;
    private int levelDialogue;
    List<Sentences> SentencesList;

    void Start()
    {
        ReadData();
        dialogueArea.SetActive(true);
        QuestionArea.SetActive(false);
        Timer.SetActive(false);
        ButtonBox.SetActive(false);
        RightOrWrongArea.SetActive(false);
        Time.timeScale = 0f;
        StartDialogue();
    }

    public void ReadData()
    {
        // lukee pelin dialogin
        SentencesList = new List<Sentences>();
        TextAsset Data = Resources.Load<TextAsset>("dialogue") as TextAsset;
        string row = "";
        int rows = 0;

        StringReader file = new StringReader (Data.text);
        while ((row = file.ReadLine()) != null)
        {
            rows++;
            try
            {
                string[] fields = row.Split(';');
                
                Sentences h = new Sentences();

                h.Sentence = fields[0];
                h.Level = fields[1];
                SentencesList.Add(h);
            }
            catch (System.Exception e)
            {
                Debug.Log(e.Message.ToString());
            }
        }
        file.Close();
    }

    public void StartDialogue()
    {
        //Debug.Log("Dialogi alkaa");
        DisplayNextSentence();
    }

    public void ContinueDialogue()
    {
        dialogueArea.SetActive(true);
        QuestionArea.SetActive(false);
        Timer.SetActive(false);
        ButtonBox.SetActive(false);
        RightOrWrongArea.SetActive(false);
        Time.timeScale = 0f;
        sentencesRead = 0;
        DisplayNextSentence();
    }

    /**
     Näyttää seuraavan dialogi lauseen ja tarkistaa kuuluuko se aktiiviseen sceneen
     */

    public void DisplayNextSentence()
    {
        Sentences x = SentencesList[index];
        // Valitsee seuraaavan dialogi lauseen
        
        Scene CurrentScene = SceneManager.GetActiveScene();
        // tarkistaa kuuluuko dialogin lause aktiiviseen sceneen, jos ei niin siirtyy seuraavaan kunnes löytyy akitiivisen sceneen dialogia
        while(true)
        {
            if (sentencesRead == 2)
            {
                EndDialogue();
                break;
            }
            x = SentencesList[index];
            if (CurrentScene.name != x.Level)
            {
                SentencesList.RemoveAt(index);
                continue;
            }
            while(CurrentScene.name == x.Level)
            {   
                dialogueText.text = x.Sentence;
                sentencesRead++;
                levelDialogue++;
                break;
            }
            index++;
            return;
        }
    }


    // Lopettaa dialogin
    void EndDialogue()
    {
        Debug.Log("Dialogi päättyy");
        dialogueArea.SetActive(false);
        QuestionArea.SetActive(true);
        Timer.SetActive(true);
        ButtonBox.SetActive(true);
        Time.timeScale = 1f;
    }
}

public class Sentences
{
    public string Sentence { get; set; }
    public string Level { get; set; }
}