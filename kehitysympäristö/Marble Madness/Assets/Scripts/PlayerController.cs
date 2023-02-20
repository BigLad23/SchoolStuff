using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class PlayerController : MonoBehaviour
{
    private Rigidbody rb;
    public float speed;
    public Vector3 jump;
    public float jumpForce = 2.0f;
    public bool isGrounded;
    public float cooldown = 2;
    private float nextTime = 0;
    void Start()
    {
        rb = GetComponent<Rigidbody>();
        jump = new Vector3(0.0f, 2.0f, 0.0f);
    }

    void OnCollisionStay()
    {
        isGrounded = true;
    }
    void Update()
    {
        if (Time.time > nextTime)
        {
        if (Input.GetKeyDown(KeyCode.Space) && isGrounded)
        {

            rb.AddForce(jump * jumpForce, ForceMode.Impulse);
            isGrounded = false;
            nextTime = Time.time + cooldown;
        }
        }
    }

    void FixedUpdate()
    {
        float moveHorizontal = Input.GetAxis("Horizontal");
        float moveVertical = Input.GetAxis("Vertical");
        Vector3 move = new Vector3(moveHorizontal * speed, 0, moveVertical * speed);
        rb.AddForce(move);
    }
    void OnTriggerEnter(Collider other)
    {
        if (other.gameObject.tag == "Goal")
        {
            SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex + 2);
        }
        if (other.gameObject.tag == "Kill")
        {
            SceneManager.LoadScene(5);
        }
        if (other.gameObject.tag == "End")
        {
            SceneManager.LoadScene(4);
        }
    }
}
