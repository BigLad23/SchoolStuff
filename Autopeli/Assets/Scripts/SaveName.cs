using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;
using UnityEngine.UI;
using UnityEngine.SceneManagement;
using System.IO;
using UnityEngine.Events;
using UnityEngine.EventSystems;
using System;

public class SaveName: MonoBehaviour
{
    public TextMeshProUGUI NameBox;

    void Start()
    {
       // NameBox.text = PlayerPrefs.GetString("PlayerName");
    }

    public TextMeshProUGUI inputField;

    public void ClickSaveButton(){
        PlayerPrefs.SetString("PlayerName", inputField.text);
        Debug.Log("PlayerName: " + PlayerPrefs.GetString("PlayerName"));
        SceneManager.LoadScene("StartMenu");
        PlayerPrefs.Save();
    }
}   