<!doctype html>
<html lang="fi">
<head>
<title>Harjoitus 13a</title>
<meta charset ="utf-8">
</head>
<body>
<h1>Uutisten Lisäys (INSERT INTO)</h1>
<form method = "post">
<label for="otsikko">Otsikko<label>
<br>
<input type="text" name="otsikko" id="Otsikko" required>
<br>
<label for="sisalto">Sisältö</label>
<br>
<input type="text" name="sisalto" id="Sisalto" required>
<br>
<label for="kirjoituspvm">KirjoitusPVM</label>
<br>
<input type="date" name="kirjoituspvm" id="Kirjoituspvm" required>
<br>
<label for="poistumispvm">PoistumisPVM</label>
<br>
<input type="date" name="poistumispvm" id="Poistumispvm" required>
<br>
<label for="kirjoittaja">Kirjoittaja</label>
<br>
<input type="text" name="kirjoittaja" id="Kirjoittaja" required>
<br>
<input type="submit" value="Julkaise">

<?php
require "harj13connection.php";
require "helper.php";

if(isset($_POST["otsikko"], $_POST["sisalto"], $_POST["kirjoituspvm"], $_POST["poistumispvm"], $_POST["kirjoittaja"])) {
    $otsikko = $_POST["otsikko"];
    $sisalto = $_POST["sisalto"];
    $kirjoituspvm = $_POST["kirjoituspvm"];
    $poistumispvm = $_POST["poistumispvm"];
    $kirjoittaja = $_POST["kirjoittaja"];


$sql = "INSERT INTO uutinen22(otsikko,sisalto,kirjoituspvm,poistumispvm,kirjoittaja) VALUES (?,?,?,?,?)";

$stm = $pdo->prepare($sql);

$stm->execute(array($otsikko,$sisalto,$kirjoituspvm,$poistumispvm,$kirjoittaja));
}
else echo "Et täyttänyt kaikkia kenttiä tai jokin ei vaan toimi";