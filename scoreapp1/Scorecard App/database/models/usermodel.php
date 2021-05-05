<?php
require "./database/connection.php"; 


 
function getAllUsers()
{
global $db; 
 
$sql = "SELECT * FROM users"; 
$stm = $db->query($sql);
 
$allusers = $stm->fetchAll(PDO::FETCH_ASSOC);

return $allusers;   
}



function addUser($data)
{
    global $db;
    $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
    $stm = $db->prepare($sql);
    $ok = $stm->execute($data);
    return $ok;
}



function getUserByUsername($username)
{
    global $db;

    $sql = "SELECT * FROM users WHERE username = ?";
    $stm = $db->prepare($sql);

    $stm->bindValue(1, $username);
    $stm->execute();
    
    $user = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}



function loginUser($username,$password)
{
    global $db; //connection

    $sql = "SELECT username, password FROM users WHERE username = ?";

    $stm = $db->prepare($sql);
    $stm->bindValue(1,$username);
    $stm->execute();

    $user = $stm->fetchAll(PDO::FETCH_ASSOC);

    if($user) {
        if(password_verify($password,$user[0]["password"]))  {
            return TRUE;
        } else return FALSE;
    } else return FALSE;
}


?>