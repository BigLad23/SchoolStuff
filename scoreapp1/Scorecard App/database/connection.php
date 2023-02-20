<?php
$dsn = "mysql:host=77.86.251.181;dbname=truud954_scoreapp_db_sofia";
$user = "truud954_sofiab";
$passwd = "yWz!%+K#ip&-";

$pdo = new PDO($dsn, $user, $passwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>