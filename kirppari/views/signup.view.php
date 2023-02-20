<?php
include "../views/partials/head.php";
if(isset($message)) echo $message;
?>



<div class="signuparea">
<h2 class="centered">Luo käyttäjä</h2>
<form  action="/index.php?action=register" method="post">

  <label for="firstname">Etunimi:</label>
  <input type="text" name="firstname" maxlength=30><br>

  <label for="lastname">Sukunimi:</label>
  <input type="text" name="lastname" maxlength=30><br>

  <label for="email">Sähköposti:</label>
  <input type="text" name="email" maxlength=30><br>

  <label for="username">Käyttäjänimi:</label>
  <input type="text" name="username" maxlength=30><br>

  <label for="password">Salasana:</label>
  <input type="password" name="salasana" maxlength=30><br>

  <label for="password2">Salasana uudelleen:</label>
  <input type="password" name="salasana2" maxlength=30><br>
  <input type ="hidden" name="isadmin">

<button type="submit" class="signupbutton" value=?>Luo käyttäjä</button>


<div class="container">
<button type="button" class="cancelbutton" onclick=location.href='../tyyliopas/etusivu.php'>Peruuta</button>
</div>
</form>
</div>
</div>