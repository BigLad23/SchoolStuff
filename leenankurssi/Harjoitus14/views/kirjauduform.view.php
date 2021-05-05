<?php
include "./views/partials/head.php";

if(isset($message)) echo $message;
?>
<form method="post" action="./index.php?action=kirjaudu">

<label for="kayttajatunnus">Käyttäjätunnus</label><br>
<input type="text" name ="kayttajatunnus" required><br>

<label for="salasana">Salasana</label><br>
<input type="password" name="salasana" required><br>


<input type="submit" value="Kirjaudu"><br>
</form>


<?php
include "./views/partials/end.php";
?>