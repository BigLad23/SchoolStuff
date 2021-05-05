<!doctype html>
<html lang="fi">
<head>
<title>Demo 12 d</title>
<meta charset ="utf-8">
</head>
<body>

<?php
require "connection.php";

echo "<h2>kaikki käyttäjätunnukset (FETCH_ASSOC)</h2>";

$sql = "SELECT account_name FROM players";


//statement saa komennon vastauksen
$statement = $pdo->query($sql);

//haetaan vastaus php-muuttujaan (assosiatiiviseem taulukkoon)
$players = $statement->fetchall(PDO::FETCH_ASSOC);


foreach($players as $player) {
    echo $player["account_name"]."<br>";
}



echo "<h2>kaikki käyttäjätunnukset ja sähköpostit</h2>";

$sql = "SELECT account_name,email FROM players";
$statement = $pdo->query($sql);

$players = $statement->fetchall(PDO::FETCH_CLASS);

foreach($players as $player) {
    echo $player->account_name." ".$player->email."<br>";
}

echo "<h2>kaikki tänään kirjautuneet pelaajat</´h2>";


$sql = "SELECT account_name FROM players WHERE last_login = CRUDATE) AND banned = 1";

$stm = $pdo->query($sql);

$players = $stm->fetchAll(PDO::FETCH_NUM);


foreach ($players as $player)  {
    echo $player[0]."<br>";
}

