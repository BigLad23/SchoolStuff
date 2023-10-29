using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using TMPro;
using UnityEngine.Events;

public class Settings : MonoBehaviour
{
    public TMPro.TMP_Dropdown resolutionDropdown;
    public Toggle fullScreenToggle;
    private Resolution[] resolutions;
    private List<Resolution> ResolutionList;
    private int currentResolutionIndex = 0;

    void Start()
    {
        resolutionDropdown.ClearOptions();
        resolutions = Screen.resolutions;
        ResolutionList = new List<Resolution>();
        List<string> Options = new List<string>();

       for (int i = 0; i < resolutions.Length; i++)
        {
            string option = resolutions[i].width + " x " + resolutions[i].height;
            Options.Add(option);

            if (resolutions[i].width == Screen.currentResolution.width && resolutions[i].height == Screen.currentResolution.height)
            {
                currentResolutionIndex = i;
            }
        }
        resolutionDropdown.AddOptions(Options);
        resolutionDropdown.value = PlayerPrefs.GetInt("Resolution", currentResolutionIndex);
        resolutionDropdown.RefreshShownValue();
    }
    public void setResolution(int resolutionIndex)
    {
        if (Screen.fullScreen == true) {
        Resolution resolution = resolutions[resolutionIndex];
        Screen.SetResolution(resolution.width, resolution.height, true);
        resolutionDropdown.onValueChanged.AddListener(new UnityAction<int>(index =>
            {
            PlayerPrefs.SetInt("Resolution", resolutionDropdown.value);
            PlayerPrefs.Save();
        })); 
        // Debug.Log(PlayerPrefs.GetInt("Resolution"));
        }
        else
        {
            Resolution resolution = resolutions[resolutionIndex];
            Screen.SetResolution(resolution.width, resolution.height, false);
            resolutionDropdown.onValueChanged.AddListener(new UnityAction<int>(index =>
            {
            PlayerPrefs.SetInt("Resolution", resolutionDropdown.value);
            PlayerPrefs.Save();
        }));    
           // Debug.Log(PlayerPrefs.GetInt("Resolution"));
        }
    }
    public void SetFullScreen(bool isFullScreen)
    {
        Screen.fullScreen = !Screen.fullScreen;
        int currentState = fullScreenToggle.isOn ? 1 : 0;
        PlayerPrefs.SetInt("FullScreen", currentState);
        PlayerPrefs.Save();
        Debug.Log(PlayerPrefs.GetInt("FullScreen"));
}
}