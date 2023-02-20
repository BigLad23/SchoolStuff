<?php
/* This function handles the login of admin users */

function loginAdmin ($username, $password)
{
    global $pdo;

    $sql = "SELECT username, password FROM users WHERE username = ?";

    $stm = $pdo->prepare ($sql);
    $stm->bindValue (1, $username, PDO::PARAM_STR);
    $stm->execute ();

    $admin = $stm->fetchAll (PDO::FETCH_ASSOC);

    if ($admin)
    {
        if (password_verify ($password, $admin[0]["password"]))
        {
            return TRUE;
        }
        else return FALSE;
    } else return FALSE;
}

/* This function fetches admins by username */

function getAdminByUsername ($username)
{
    global $pdo;

    $sql = "SELECT * FROM users WHERE username = ?";

    $stm = $pdo->prepare ($sql);
    $stm->execute (array ($username));

    $admin = $stm->fetchAll (PDO::FETCH_ASSOC);
    return $admin;
}

function addEvent ($data) 
{
    global $pdo;

    $sql = "INSERT INTO event (name, date, type) VALUES (?, ?, ?)";

    $stm = $pdo->prepare ($sql);
    $ok = $stm->execute ($data);
    return $ok;
}

function editEvent ($data)
{
    global $pdo;

    $sql = "UPDATE event SET name = ?, date = ?, type = ? WHERE event_id = ?";

    $stm = $pdo->prepare ($sql);
    $ok = $stm->execute ($data);
    return $ok;
}

function deleteEvent ($event_id)
{
    global $pdo;

    $sql = "DELETE FROM event WHERE event_id = ?";

    $stm = $pdo->prepare ($sql);
    $stm->bindValue (1, $event_id);
    $ok = $stm->execute ();
    return $ok;
}
?>