<?php
function getYourBets()
{
    
}


 
function getAllUsers()
{
global $pdo;
 
$sql = "SELECT * FROM users"; 
$stm = $pdo->query($sql);
 
$allusers = $stm->fetchAll(PDO::FETCH_ASSOC);

return $allusers;   
}



function addUser($data)
{
    global $pdo;
    $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
    $stm = $pdo->prepare($sql);
    $ok = $stm->execute($data);
    return $ok;
}



function getUserByUsername($username)
{
    global $pdo;

    $sql = "SELECT * FROM users WHERE username = ?";
    $stm = $pdo->prepare($sql);

    $stm->bindValue(1, $username);
    $stm->execute();
    
    $user = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}



function loginUser($username,$password)
{
    global $pdo; //connection

    $sql = "SELECT username, password FROM users WHERE username = ?";

    $stm = $pdo->prepare($sql);
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