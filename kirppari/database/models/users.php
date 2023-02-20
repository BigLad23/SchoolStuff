<?php

require "../database/connection.php";


function GetAllUsers()
{
    global $pdo;
    $sql = "SELECT * FROM user";
    $stm = $pdo->query($sql);

    $users = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function AddUser($data)
{
    global $pdo;
    $sql = "INSERT INTO user (firstname,lastname,email,username,salasana,isadmin) VALUES(?,?,?,?,?,?)";
    
    
    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;  
}


function checkLogin($username,$password)
{
    global $pdo;

    $sql = "SELECT userid,username,salasana FROM user WHERE username=?";

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

function searchUser($user)
{
    global $pdo;

    $sql = "SELECT * FROM user WHERE username=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$user);
    $stm->execute();

    $user = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}

function getUserId($userid)
{
    global $pdo;
    $sql = "SELECT * FROM user WHERE userid = ?";
    $stm=$pdo->prepare($sql);

    $stm->bindvalue(1,$userid);
    $stm->execute();

    $user = $stm->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function updateUser($data)
{
    global $pdo;
    $sql = "UPDATE user SET firstname = ?, lastname = ?, email = ?, username = ?, salasana = ?, isadmin = ?   WHERE userid=?";
    $stm = $pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;
    
}


function deleteUser($id)
{
    global $pdo;
    $sql = "DELETE FROM user WHERE userid=?";
    $stm=$pdo->prepare($sql);
    $stm->bindValue(1,$id);
    if($stm->execute()) return TRUE;
    else return FALSE;
    
}