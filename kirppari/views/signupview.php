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
    <li class="loggedout"><a class="active" href="../views/signupview.php">Luo käyttäjä</a></li>
    <li class="loggedout"><a href="../views/loginview.php">Kirjaudu</a></li>
  </div>

<div class="backgroundimg" style="background-image: url('../tyyliopas/kaupunki2.jpg');"> 

<div class="signuparea">
<h2 class="centered">Luo käyttäjä</h2>
<form  action="/login" method="post">
    Etunimi: <input type="text" name="firstname" maxlength=30><br>
    Sukunimi: <input type="text" name="lastname" maxlength=30><br>
    Sähköposti: <input type="text" name="email" maxlength=30><br>
    Käyttäjänimi: <input type="text" name="username" maxlength=30><br>
    Salasana: <input type="password" name="salasana" maxlength=30><br>
    Salasana uudelleen: <input type="password" name="salasana" maxlength=30><br>
    <button type="submit" class="signupbutton">Luo käyttäjä</button>

    <div class="container">
    <button type="button" class="cancelbutton" onclick=location.href='../tyyliopas/etusivu.php'>Peruuta</button>
  </div>
</form>
</div>
</div>