<?php

require "./database/13connection.php";

function getAllPlayers()
{
    global $pdo;
    $sql = "SELECT * FROM players";
    $stm = $pdo->query($sql);

    $players = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $players;

    // return  $stm->fetchAll(PDO::ASSOC);
}

function addplayer($data)
{
    global $pdo;
    $sql = "INSERT INTO players (account_name,password,email,last_login,current_character) VALUES(?,?,?,?,?)";

    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;    
}

function deletePlayer($id)
{
    global $pdo;
    $sql = "DELETE FROM players WHERE id=?";
    $stm=$pdo->prepare($sql);
    $stm->bindValue(1,$id);
    if($stm->execute()) return TRUE;
    else return FALSE;
}

function loginplayer($account_name,$password)
{
    global $pdo;

    $sql = "SELECT id,account_name,password FROM players WHERE account_name=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$account_name);
    $stm->execute();

    $player = $stm->fetchAll(PDO::FETCH_ASSOC);
    if($player) { 
    if(password_verify($password,$player[0]["password"])) {
        return TRUE;
    } else return FALSE;
    } else return FALSE;
}

function getPlayerByName($account_name)
{
    global $pdo;

    $sql = "SELECT * FROM players WHERE account_name=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$account_name);
    $stm->execute();

    $player = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $player;
}