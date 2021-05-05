<?php
require "connection.php";

if(!isset($_GET["id"])) {
   header("Location:demo12f.php"); //paluu edelliselle sivulle 
} else $id = $_GET["id"];


$sql = "DELETE FROM players WHERE id = ?";

echo $sql;
$stm = $pdo->prepare($sql);
$stm->bindValue(1, $id);
$stm->execute();

header("Location:demo12f.php");
?>