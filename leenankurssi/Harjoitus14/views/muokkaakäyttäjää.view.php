<?php
include "./views/partials/head.php";
?>

<form method ="post" action="./index.php?action=muokkaa">

<input type ="hidden" name="playerID" value="<?= $id;?>">

<label for="kayttajatunnus">Käyttäjätunnus</label><br>
<input type ="text" name ="kayttajatunnus" value ="<?= $kayttaja;?>" required><br>


<label for="salasana">Salasana</label><br>
<input type="password" name="salasana" value ="<?= $password; ?>" required><br>

<label for="salasana2">Salasana uudelleen</label><br>
<input type="password" name="salasana2" value ="<?= $password; ?>" required><br>

<input type="submit" value="Muuta Käyttäjää">
</form>/
<?php
include "./views/partials/end.php";
?>
