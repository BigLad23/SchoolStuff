using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class GameOver : MonoBehaviour
{
    public void NextLevel()
    {
        SceneManager.LoadScene(1);
    }
    public void LastLevel()
    {
        SceneManager.LoadScene(3);
    }
    public void Quit()
    {
        Debug.Log("Player has quit");
        Application.Quit();
    }
}
