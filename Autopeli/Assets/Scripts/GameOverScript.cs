using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using TMPro;

public class GameOverScript : MonoBehaviour
{
    public GameObject WinnerText;
    public GameObject LoserText;

    public TextMeshProUGUI ScoreText;
    // Start is called before the first frame update
    public void Start()
    {
        int Score = PlayerPrefs.GetInt("PlayerScore");
        //PlayerPrefs.SetInt("PlayerScore", score);
        ScoreText.text = "Pisteesi: " + GlobalScore.Score;
        loadscore();

        if (GlobalScore.Score == 1)
        {
            Debug.Log("You won");
            WinnerText.SetActive(true);
            LoserText.SetActive(false);
        }
    }
    private void loadscore()
    {
    }
    // Update is called once per frame
}
