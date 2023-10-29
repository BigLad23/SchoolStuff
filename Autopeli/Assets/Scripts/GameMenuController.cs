using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class GameMenuController : MonoBehaviour
{
    public GameObject pauseMenuUI;
    public static bool gameIsPaused = false;
    public GameObject quitMenu;
    public GameObject menu;
    public GameObject gameUI;
    public GameObject settingsMenu;

    void Start()
    {
        PlayerPrefs.GetInt("Resolution", 0);
        PlayerPrefs.GetInt("FullScreen", 0);
    }

    void Update()
    {
        if (Input.GetKeyDown(KeyCode.Escape))
        {
            if (gameIsPaused)
            {
                Resume();
            }
            else
            {
                Pause();
            }
        }
    }

    public void Resume()
    {
        pauseMenuUI.SetActive(false);
        settingsMenu.SetActive(false);
        gameUI.SetActive(true);
        Time.timeScale = 1f;
        gameIsPaused = false;
    }

    void Pause()
    {
        pauseMenuUI.SetActive(true);
        menu.SetActive(true);
        settingsMenu.SetActive(false);
        gameUI.SetActive(false);
        quitMenu.SetActive(false);
        Time.timeScale = 0f;
        gameIsPaused = true;
    }

    public void Settings()
    {
        settingsMenu.SetActive(true);
        menu.SetActive(false);
    }

    public void Save()
    {
        Debug.Log("Settings saved");
        settingsMenu.SetActive(false);
        menu.SetActive(true);
    }

    public void Quit()
    {
        quitMenu.SetActive(true);
        menu.SetActive(false);
    }

    public void QuitGame()
    {
        Debug.Log("Player quit");
        Application.Quit();
    }

    public void Cancel()
    {
        settingsMenu.SetActive(false);
        quitMenu.SetActive(false);
        menu.SetActive(true);
    }

    public void Menu()
    {
        SceneManager.LoadScene("StartMenu");
    }
    
}
