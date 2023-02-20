using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class EnemySpawner : MonoBehaviour
{
    public GameObject enemy;
    public float timer;
    public float delayTimer;
    public GameObject[] enemies;
    // Start is called before the first frame update
    void Start()
    {
        Vector3 carPos = new Vector3(0, transform.position.y, 0);
        Instantiate(enemy, carPos, transform.rotation);
    }

    // Update is called once per frame
    void Update()
    {
        timer -= Time.deltaTime;
        if (timer < 0)
        {
            float posX = Random.Range(2, -2);
            int carIndex = Random.Range(0, 3);
            Vector3 carPos = new Vector3(posX, transform.position.y, 0);
            Instantiate(enemies[carIndex], carPos, transform.rotation);
            timer = delayTimer;

        }
    }
}
