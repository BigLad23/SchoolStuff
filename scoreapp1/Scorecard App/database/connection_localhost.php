<?php
$dsn = "mysql:host=localhost;dbname=scoreapp_db";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>