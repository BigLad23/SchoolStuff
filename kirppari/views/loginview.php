<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../tyyliopas/sivusto.css">
  <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@600&display=swap" rel="stylesheet"> 
  </head>
  <body>

  <div class="navbar">
    <li><a href="../tyyliopas/etusivu.php">Etusivu</a></li>
    <li><a href="../tyyliopas/varaus.php">Varaa</a></li>
    <li><a href="../tyyliopas/yhteystiedot.php">Yhteystiedot</a></li>
    <li class="loggedout"><a href="../views/signupview.php">Luo käyttäjä</a></li>
    <li class="loggedout"><a class="active" href="../views/loginview.php">Kirjaudu</a></li>
  </div>

<div class="backgroundimg" style="background-image: url('../tyyliopas/kaupunki2.jpg');"> 

<div class="loginarea">
<h2 class="centered">Kirjaudu</h2>
<form  action="/login" method="post">
    Käyttäjänimi: <input type="text" name="username" maxlength=30><br>
    Salasana: <input type="password" name="password" maxlength=30><br>
    <button type="submit" class="loginbutton">Kirjaudu sisään</button>

    <div class="container">
    <button type="button" class="cancelbutton">Peruuta</button>
  </div>
</form>
</div>
</div>