<?php
include "./views/partials/head.php";
?>
<form method="post">

<label for="kayttajatunnus">Käyttäjätunnus</label><br>
<input type="text" name ="kayttajatunnus" required><br>

<label for="salasana">Salasana</label><br>
<input type="password" name="salasana" required><br>

<label for="salasana2">Salasana uudelleen</label><br>
<input type="password" name="salasana2" required><br>


<br>
<input type="submit" value="Rekisteröi Käyttäjä"><br>
</form>
<?php
include "./views/partials/end.php";
?>
