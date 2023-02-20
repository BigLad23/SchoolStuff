using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using System;

public class TimeScript : MonoBehaviour
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
    }
}
