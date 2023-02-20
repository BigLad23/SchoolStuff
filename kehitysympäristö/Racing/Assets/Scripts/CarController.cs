using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;
public class CarController : MonoBehaviour
{
    public float speed;
    Vector3 position;
    public Text txtPaused;
    public Text txtScore;
    public int Score;
    private bool paused;
    // Start is called before the first frame update
    void Start()
    {
        position = transform.position;
        Score = 0;
    }
    public void addScore()
    {
        this.Score += 1;
        this.txtScore.text = "Score: " + Score;
    }

    // Update is called once per frame
    void Update()
    {
        position.x += Input.GetAxis("Horizontal") * speed * Time.deltaTime;
        transform.position = position;
        if (Input.GetKeyDown("space"))
        {
            if (paused)
            {
                // pelin pitäisi jatkua	
                paused = false;
                txtPaused.text = " ";
                Time.timeScale = 1;
            }
            else
            {
                paused = true;
                txtPaused.text = "PAUSE";
                Time.timeScale = 0;
            }
        }
    }
    void OnTriggerEnter2D(Collider2D other)
    {
        if (other.gameObject.tag == "enemy")
        {
            Debug.Log("törmäys vastustajaan");
            Destroy(other.gameObject);
            Destroy(this.gameObject);
            SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex + 1);
        }

    }
}
