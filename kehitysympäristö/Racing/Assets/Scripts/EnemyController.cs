using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class EnemyController : MonoBehaviour
{
    public float speed = 0.5f;
    
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        transform.Translate(new Vector3(0, -1, 0) * speed * Time.deltaTime);
    }
    void OnCollisionEnter2D(Collision2D col)
    {
        
        if (col.gameObject.tag == "bottom")
        {
            // Debug.Log("test");
            CarController c = GameObject.Find("car").GetComponent<CarController>();
            c.addScore();
            TrackController track = GameObject.Find("Track").GetComponent<TrackController>();
            track.AddSpeed();
            Destroy(this.gameObject);
            
        }

    }
}
