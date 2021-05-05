using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class DeathSystem : MonoBehaviour
{
    public Transform respawn;
    public Transform fallout;
    void Start()
    {
        
    }

   
    void Update()
    {
        
    }
      void OnTriggerEnter2D(Collider2D other) {
        if(other.transform == fallout)
        {
            transform.position = respawn.position;
    }
}
}
