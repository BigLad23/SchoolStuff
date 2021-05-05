<?php
require "connection.php";
require "helper.php";


if(isset($_POST["id"],$_POST["aname"],$_POST["email"],$_POST["character"],$_POST["money"])) {
     $id = $_POST["id"];
     $account_name = sanit($_POST["aname"]);
     $email = sanit($_POST{"email"});
     $current_character = sanit($_POST["current_character"]);
     $money = $_POST["money"];


$sql = "UPDATE players SET account_name = ?, email = ?, money = ?, current_character = ? WHERE id = ?";

$data = array($account_name,$email,$money,$current_character,$id);

$stm = $pdo->prepare($sql);
if($stm->execute($data)) {
    header("Location: demo12f.php?message=ok");
}
 else header("Location: demo12f.php?message=no"); 
}
else header("Location: demo12f.php?message=eitietoja");
