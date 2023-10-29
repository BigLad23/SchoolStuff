using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class MainMenuController : MonoBehaviour
{
    public GameObject levelMenu;
    public GameObject startMenu;
    public GameObject settingsMenu;
    public GameObject saveNameMenu;

    void Start()
    {
        PlayerPrefs.GetInt("Resolution", 0);
        PlayerPrefs.GetInt("FullScreen", 0);
        GlobalScore.Score2 = 0;
    }

    public void Levels()
    {
        levelMenu.SetActive(true);
        startMenu.SetActive(false);
        settingsMenu.SetActive(false);
    }

    public void StartMenu()
    {
        levelMenu.SetActive(false);
        startMenu.SetActive(true);
        settingsMenu.SetActive(false);
    }

    public void Settings()
    {
        levelMenu.SetActive(false);
        startMenu.SetActive(false);
        settingsMenu.SetActive(true);
    }

    public void goBack()
    {
        levelMenu.SetActive(false);
        startMenu.SetActive(true);
        settingsMenu.SetActive(false);
    }

    public void goBackToSettings()
    {
        levelMenu.SetActive(false);
        startMenu.SetActive(false);
        settingsMenu.SetActive(true);
        saveNameMenu.SetActive(false);
    }

    public void SaveName()
    {
        levelMenu.SetActive(false);
        startMenu.SetActive(false);
        settingsMenu.SetActive(false);
        saveNameMenu.SetActive(true);
    }
    
    public void saveSettings() 
    {
        Debug.Log("Settings saved");
        levelMenu.SetActive(false);
        startMenu.SetActive(true);
        settingsMenu.SetActive(false);
    }
    public void Quit()
    {
        Debug.Log("Player quit");
        Application.Quit();
    }
}