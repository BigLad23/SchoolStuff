using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class EnemyProjectile : MonoBehaviour
{

    public Rigidbody2D projectile;

    public float moveSpeed = 15.0f;

    void Start()
    {
        projectile = this.gameObject.GetComponent<Rigidbody2D>();
    }


    void Update()
    {
        projectile.velocity = new Vector2(0, -1) * moveSpeed;
    }
 
    void OnCollisionEnter2D(Collision2D col)
    {

        if (col.gameObject.name == "bottom")
        {
            Destroy(this.gameObject);
        }
    }
    void OnTriggerEnter2D(Collider2D other)
    {
        if (other.gameObject.tag == "Player")
        {
            Destroy(other.gameObject);
            Destroy(this.gameObject);
            SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex + 1);
        }
    }
}