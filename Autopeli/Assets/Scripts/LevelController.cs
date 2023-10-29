using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class LevelController : MonoBehaviour
{   
    public GameObject levelMenu;
    public GameObject levelMenus;
    public GameObject Day1;
    public GameObject Day2;
    public GameObject Day3;
    public GameObject Day4;
    public GameObject Day5;
    public GameObject Day6;
    public GameObject Day7;
    public GameObject GameMenu;
    public GameObject LeaderBoard;
    
    // Loads Scenes = levels in the game
    public void Menu()
    {
        SceneManager.LoadScene("StartMenu");
    }
    
    public void PlayDay1()
    {
        SceneManager.LoadScene("Day1"); 
    }
    
    public void PlayDay2()
    {
        SceneManager.LoadScene("Day2"); 
    }

    public void PlayDay3()
    {
        SceneManager.LoadScene("Day3"); 
    }

    public void PlayDay4()
    {
        SceneManager.LoadScene("Day4");
    }
    
    public void PlayDay5()
    {
        SceneManager.LoadScene("Day5"); 
    }

    public void PlayDay6()
    {
        SceneManager.LoadScene("Day6"); 
    }

    public void PlayDay7()
    {
        SceneManager.LoadScene("Day7"); 
    }

    public void LoadDay1()
    {
        levelMenu.SetActive(false);
        levelMenus.SetActive(true);
        Day1.SetActive(true);
    }

    public void LoadDay2()
    {
        levelMenu.SetActive(false);
        levelMenus.SetActive(true);
        Day2.SetActive(true);
    }
    
    public void LoadDay3()
    {
        levelMenu.SetActive(false);
        levelMenus.SetActive(true);
        Day3.SetActive(true);
    }

    public void LoadDay4()
    {
        levelMenu.SetActive(false);
        levelMenus.SetActive(true);
        Day4.SetActive(true);
    }

    public void LoadDay5()
    {
        levelMenu.SetActive(false);
        levelMenus.SetActive(true);
        Day5.SetActive(true);
    }

    public void LoadDay6()
    {
        levelMenu.SetActive(false);
        levelMenus.SetActive(true);
        Day6.SetActive(true);
    }
    
    public void LoadDay7()
    {
        levelMenu.SetActive(false);
        levelMenus.SetActive(true);
        Day7.SetActive(true);
    }

    public void BackButton()
    {
        levelMenu.SetActive(true);
        levelMenus.SetActive(false);
        Day1.SetActive(false);
        Day2.SetActive(false);
        Day3.SetActive(false);
        Day4.SetActive(false);
        Day5.SetActive(false);
        Day6.SetActive(false);
        Day7.SetActive(false);
    }

    public void OpenLeaderboard()
    {
        GameMenu.SetActive(false);
        LeaderBoard.SetActive(true);
    }

    public void CloseLeaderboard()
    {
        GameMenu.SetActive(true);
        LeaderBoard.SetActive(false);
    }
}
