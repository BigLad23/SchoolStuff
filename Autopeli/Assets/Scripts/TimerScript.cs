﻿using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;
using System.IO;
using TMPro;
using UnityEngine.Events;
using UnityEngine.EventSystems;
using System;

public class TimerScript : MonoBehaviour
{
    public TextMeshProUGUI txtTime;
    public float currentTime = 0f;
    public float startingTime = 10f;

    void Start()
    {
        currentTime = startingTime;
    }

    void Update()
    {
        currentTime -= 1 * Time.deltaTime;
        txtTime.text = "Aika: " + Math.Round(currentTime);

        if (txtTime.text == "Aika: 0")
        {
            SceneManager.LoadScene("GameOverScene");
            FindObjectOfType<GameController>().SaveData();
        }

    }

}