using UnityEngine;
using UnityEngine.SceneManagement;
using System.Collections;
 
public class StartScript : MonoBehaviour
{
 
    // This script is used to load the first scene on the first launch of the game
    // Where username is asked
    // Prevents the first scene form loading more then ones so the user doesnt have to input username every time 
    // If you want to load a different scene on the first launch just change the scene name in the if statement
      
    void Start()
    {
        if (PlayerPrefs.HasKey("HasDoneTutorial"))
            {
                //Loads the menu scene if the game has been launched before
                SceneManager.LoadScene("StartMenu");
            }
            else
            {       //First launch
                SceneManager.LoadScene("Tutorial");
            }

            //When the player finish the tutorial you must run
            PlayerPrefs.SetString("HasDoneTutorial", "yes");
            PlayerPrefs.Save();
    }
}