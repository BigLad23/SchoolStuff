using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class QuitGame : MonoBehaviour
{ 
     public void QuitButton()
    {
        Debug.Log("Player has quit");
        Application.Quit();
    }
}
