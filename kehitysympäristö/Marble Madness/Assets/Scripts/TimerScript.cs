using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using System;
using UnityEngine.SceneManagement;

public class TimerScript : MonoBehaviour
{
    public Text txtTime;
    public float currentTime = 0f;
    public float startingTime = 10f;

    void Start()
    {
        currentTime = startingTime;
    }

    void Update()
    {
        currentTime -= 1 * Time.deltaTime;
        txtTime.text = "Time: " + Math.Round(currentTime);
        if (currentTime < 0)
        {
            SceneManager.LoadScene(2);
        }
    }
}