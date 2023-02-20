using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class EnemyController : MonoBehaviour
{
    public float moveSpeed;

    void Update()
    {
        MoveAlien();
    }

    public void MoveAlien()
    {
        Vector3 movedPos = transform.position;
        movedPos.x += moveSpeed * Time.deltaTime;
        transform.position = movedPos;
    }

    private void OnTriggerEnter2D(Collider2D collsion) { 
        if(collsion.tag == "MainCamera")
        {
            ChangeDirection();
        }
    }

    public void ChangeDirection()
    {
        moveSpeed *= -1;
    }
}

