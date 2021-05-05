<?php

require "./database/connection.php";


function GetAllUsers()
{
    global $pdo;
    $sql = "SELECT * FROM user";
    $stm = $pdo->query($sql);

    $usernames = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $usernames;
}

function AddUser($data)
{
    global $pdo;
    $sql = "INSERT INTO user (kayttajatunnus,salasana) VALUES(?,?)";
    
    
    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;  
}


function checkLogin($username,$password)
{
    global $pdo;

    $sql = "SELECT kayttajaID,username,salasana FROM user WHERE kayttajatunnus=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$username);
    $stm->execute();

    $username = $stm->fetchAll(PDO::FETCH_ASSOC);
    if($username) {
        if(password_verify($password,$username[0]["salasana"])) {
            return TRUE;
        } else return FALSE;
    } else return FALSE;
} 

function searchId($username)
{
    global $pdo;

    $sql = "SELECT * FROM user WHERE username=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$username);
    $stm->execute();

    $username = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $username;
}