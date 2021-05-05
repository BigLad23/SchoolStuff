<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="sivusto.css">
  <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@600&display=swap" rel="stylesheet"> 
  </head>
  <body>

  <div class="navbar">
    <li><a href="etusivu.php">Etusivu</a></li>
    <li><a class="active" href="varaus.php">Varaa</a></li>
    <li><a href="yhteystiedot.php">Yhteystiedot</a></li>
    <li class="loggedout"><a href="../views/signupview.php">Luo käyttäjä</a></li>
    <li class="loggedout"><a href="../views/loginview.php">Kirjaudu</a></li>
  </div>
  <div class="header">
    <img src="kaupunki.jpg" alt="kuva" style="width:100%;min-height:350px;max-height:700px;">
    <div class="vasen">Kirpparisivu</div>
</div>
  <h1>Varaa Paikka</h1>

  <form>
    <label for="fname">Etunimi:</label><br>
    <input type="text" id="etu" name="etu" ><br>
    <label for="lname">Sukunimi:</label><br>
    <input type="text" id="suku" name="suku"><br>
    <label for="email">Sähköposti:</label><br>
    <input type="email" id="email" name="email"><br>
    <input type="submit" value="Lähetä">
  </form> 
</body>