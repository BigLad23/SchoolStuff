<?php
$dsn = "mysql:host=localhost;dbname=scoreapp_db";
$user = "root";
$passwd = "";

$pdo = new PDO ($dsn, $user, $passwd);
=======
$db = new PDO($dsn, $user, $passwd);

?>