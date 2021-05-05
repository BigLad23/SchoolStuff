<?php
include "./views/partials/head.php";

if(isset($message)) echo $message;
?>
<form method="post" action="./index.php?action=login">

<label for="account_name">Käyttäjätunnus</label><br>
<input type="text" name ="account_name" required><br>

<label for="password">Salasana</label><br>
<input type="password" name="password" required><br>


<input type="submit" value="Kirjaudu"><br>
</form>


<?php
include "./views/partials/end.php";
?>