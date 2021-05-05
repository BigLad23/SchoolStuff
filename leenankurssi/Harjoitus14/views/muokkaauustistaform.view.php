<?php
include "./views/partials/head.php";
?>

<form method ="post" action="./index.php?action=muokkaa1">

<input type ="hidden" name="id" value="<?= $id;?>">


<label for="otsikko">Otsikko</label><br>
<input type ="text" name ="otsikko" value ="<?= $uutinen;?>" required><br>

<label for="otsikko">Otsikko</label><br>
<input type ="text" name ="otsikko" value ="<?= $uutinen;?>" required><br>

<input type="submit" value="Muuta Käyttäjää">
</form>
<?php
include "./views/partials/end.php";
?>