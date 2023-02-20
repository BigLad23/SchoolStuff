using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Background : MonoBehaviour
{
    [SerializeField]
    private Transform background;
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        if (transform.position.y >= background.position.y + 10.94f)
            background.position = new Vector2(background.position.x, transform.position.y + 10.94f);

        else if (transform.position.y <= background.position.y - 10.94f)
            background.position = new Vector2(background.position.x, transform.position.y - 10.94f);
    }
}
