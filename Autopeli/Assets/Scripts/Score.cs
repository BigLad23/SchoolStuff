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

public class ScoreData
{
    public string name;
    public string aika;
    public string score;
}

public class Score : MonoBehaviour
{
    public TextMeshProUGUI txtReadScore;
    public TextMeshProUGUI txtReadAika;
    public TextMeshProUGUI txtReadName;
    public TextMeshProUGUI txtPlace;
    public string score;
    public string aika;
    public new string name;
    private string LastOpenSceneName;
    

    // lista henkilöille
    List<ScoreData> listScore;

    // Start is called before the first frame update
    void Start()
    {
       // Define an array of scene names
        string[] sceneNames = { "Day1", "Day2", "Day3", "Day4", "Day5", "Day6", "Day7" };

        // Get the score value
        int score = GlobalScore.Score2;

        // Check if the score is within the range of the array
        if (score >= 1 && score <= sceneNames.Length)
        {
            // Use the score as an index to get the corresponding scene name
            string sceneName = sceneNames[score - 1];

            // Call the ReadData function with the scene name
            ReadData(sceneName);
            Debug.Log("Read tehty");
        }
    }
    
    public void ReadData(string sceneName)
    {
        // tyhjennetään Scoret
        listScore = new List<ScoreData>();
        TextAsset Data = Resources.Load<TextAsset>("scores") as TextAsset;
        string row = "";
        int rows = 0;

        // luetaan tiedosto läpi rivi kerrallaan
        StringReader file = new StringReader(Data.text);
        while ((row = file.ReadLine()) != null)
        {
            try
            {
                // Split the row by semicolon
                string[] fields = row.Split(';');

                // Check if the sceneName matches
                if (fields.Length >= 4 && fields[3] == sceneName)
                {
                    // Create a new ScoreData object
                    ScoreData data = new ScoreData();

                    // Set the fields
                    data.name = fields[0];
                    data.aika = fields[1];
                    data.score = fields[2];

                    // Add the ScoreData object to the list
                    listScore.Add(data);
                }
            }
            catch (System.Exception e)
            {
                Debug.Log(e.Message.ToString());
                rows++;
                Debug.Log(rows + "\t" + row);
                Debug.Log(PlayerPrefs.GetString("playerName"));
            }
        }
        file.Close();

        // Sort the list by score
        listScore.Sort((x, y) => y.score.CompareTo(x.score));

        // Display the scores
        txtPlace.text = "";
        txtReadAika.text = "";
        txtReadScore.text = "";
        txtReadName.text = "";

        for (int i = 0; i < Math.Min(listScore.Count, 10); i++)
        {
            ScoreData data = listScore[i];

            txtPlace.text += (i + 1) + "." + "\n";
            txtReadAika.text += data.aika + "\n";
            txtReadScore.text += data.score + "\n";
            txtReadName.text += data.name + "\n";
        }
    }
}