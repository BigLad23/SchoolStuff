using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlayerController : MonoBehaviour
{
    public float speed = 3.0f;
    Rigidbody2D rigidbody2d;
    float horizontal;
    public GameObject laserPrefab;

    // Start is called before the first frame update
    void Start()
    {
        rigidbody2d = GetComponent<Rigidbody2D>();
    }

    // Update is called once per frame
    void Update()
    {
        horizontal = Input.GetAxis("Horizontal");
        if (Input.GetKeyDown(KeyCode.Space))
        {
            Shoot();
        }
    }
    void FixedUpdate()
    {
        Vector2 position = rigidbody2d.position;
        position.x = position.x + speed * horizontal * Time.deltaTime;

        rigidbody2d.MovePosition(position);
    }
    void Shoot()
    {
        GameObject laser = Instantiate(laserPrefab, rigidbody2d.position + Vector2.up * 1.5f, Quaternion.identity);

        LaserController projectile = laser.GetComponent<LaserController>();
        projectile.Shoot(new Vector2(0, 1), 500);

    }
}
