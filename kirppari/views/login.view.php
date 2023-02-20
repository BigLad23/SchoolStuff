<?php
include "../views/partials/head.php";
if(isset($message)) echo $message;
?>


<div class="loginarea">
<h2 class="centered">Kirjaudu</h2>
<form  action="/index.php?action=login" method="post">
    Käyttäjänimi: <input type="text" name="username" maxlength=30><br>
    Salasana: <input type="password" name="salasana" maxlength=30><br>
    <button type="submit" class="loginbutton">Kirjaudu sisään</button>

    <div class="container">
    <button type="button" class="cancelbutton">Peruuta</button>
  </div>
</form>
</div>