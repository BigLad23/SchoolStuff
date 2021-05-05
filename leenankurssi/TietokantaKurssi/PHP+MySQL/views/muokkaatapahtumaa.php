<?php
include "./views/partials/head.php";
?>

<form method ="post" action="./index.php?action=muokkaa">

<input type ="hidden" name="tapahtumaID" value="<?= $id;?>">



<label for="nimi">Tapahtuman nimi</label><br>
<input type ="text" name ="nimi" value="<?php echo $tapahtuma["nimi"];?>" required><br>


<label for="paivays">Päiväys</label><br>
<input type="date" name="paivays" value="<?php echo $tapahtuma["paivays"];?>" required><br>


<input type="submit" value="Muuta Tapahtumaa">
</form>

<?php
include "./views/partials/end.php";
?>
