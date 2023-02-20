using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using System.IO;

public class GameManager : MonoBehaviour
{
    private int index;
    private bool rightanswer;
    public Text txtQuestions;
    public Text txtAnswers;
    List<Questions> listQuestions;
    void Start()
    {
        ReadData();
        ShowQuestion();
    }

    public void ReadData()
    {
        listQuestions = new List<Questions>();
        string fileName = "questions.csv";
        string path = "Assets/Files/";
        string row = "";
        int rows = 0;
        StreamReader file = new StreamReader(path + fileName);
        while ((row = file.ReadLine()) != null)
        {
            rows++;
           // Debug.Log(rows + "\t" + row);
            try
            {
                 
                string[] fields = row.Split(';');
                Questions h = new Questions();
                h.question = fields[0];
                h.answer = bool.Parse(fields[1]);
                // Debug.Log("pieni testi");
                listQuestions.Add(h);

            }
            catch (System.Exception e)
            {
                Debug.Log(e.Message.ToString());
            }
        }

        file.Close();
    }
    public void ShowQuestion()
    {
            index = Random.Range(0, listQuestions.Count);
            Questions x = listQuestions[index];
            Debug.Log(index + "\t" + x.question);
            txtQuestions.text += x.question + "\n";
            txtAnswers.text += x.answer + "\n";            
        
    }

    public void vastaus(bool answer)
    {
        if (answer == rightanswer)
        {
            Debug.Log("You were correct!");
            
        }
        else
        {
            Debug.Log("You were wrong!");
        }
    }
    public void ClickHandler(Text t)
    {
        Debug.Log("Klikkasit: " + t.text);
        ShowQuestion();
        
    }


}

    public class Questions
    {
        public string question { get; set; }
        public bool answer { get; set; }
    }