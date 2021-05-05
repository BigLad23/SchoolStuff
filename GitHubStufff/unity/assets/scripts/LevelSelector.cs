using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class LevelSelector : MonoBehaviour {
    public GameObject levelHolder;
    public Button[] lvLbuttons;

    // Start is called before the first frame update
    void Start() {

        int levelAt = PlayerPrefs.GetInt("levelAt", 2);

        for (int i = 0; i < lvLbuttons.Length; i++)
        {
            if (i + 2 > levelAt)
                lvLbuttons[i].interactable = false;
        }
    }
    public void LoadSceneButton(string level)
    {
        SceneManager.LoadScene(level);
    }
}
  

