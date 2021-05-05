<!doctype html>
<html lang="fi">
<head>
<title>Demo 12 e</title>
<meta charset ="utf-8">
</head>
<body>



<form method = "post">

<label for="aname">Käyttäjätunnus</label><br>
<input type="text" name="aname" required><br>

<label for="password">Salasana</label><br>
<input type="password" name="password" required><br>

<label for="password2">Salasana uudelleen</label><br>
<input type="password" name="password2" required><br>

<label for="email">sähköposti</label><br>
<input type="email" name="email" required><br>

<label for="character">Hahmo</label><br>
<select name="character">
    <option value = "Monster">Monster</option>
    <option value = "Orc">Orc</option>
    <option value = "Warrior">Warrior</option>
    <option value = "Wizard">Wizard</option>
    <option value = "Elf">Elf</option>
    <option value = "Fairy">Fairy</option>
    <option value = "Berserker">Berserker</option>
</select><br>
<br>
<input type="submit" value ="Rekisteröidy">
</form>

<?php

require "connection.php"; //kohta 1



if(isset($_POST["aname"],$_POST["password"],$_POST["email"],$_POST["character"]) && $_POST["password"] == $_POST["password2"]) {
    $account_name = sanit($_POST["aname"]);
    $email = sanit($_POST["email"]);
    $password = $_POST["password"];
    $character = sanit($_POST["character"]);
    $last_login = date('Y-m-d'); //automaattisesti antaa rekistöroitymispäivän
    $money = 500;
    $banned = 0;
    $online = 1;



//kohta 2 luo SQL
$sql = "INSERT INTO players(account_name,password,email,last_login,online,money,current_character,banned) VALUES(?,?,?,?,?,?,?,?)";


$stm = $pdo->prepare($sql);

$stm->execute(array($account_name,$password,$email,$last_login,$online,$money,$character,$banned));

}
else echo "Tarkista lomakkeen tiedot";

echo "<br>";


$sql = "SELECT account_name FROM players";
$stm = $pdo->query($sql);
$players = $stm->fetchAll(PDO::FETCH_CLASS);

foreach($players as $player) {
    echo $player->account_name."<br>";
}