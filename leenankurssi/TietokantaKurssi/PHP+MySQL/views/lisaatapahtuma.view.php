<?php
include "./views/partials/head.php";
?>
<form method="post" action="./index.php?action=lisaatapahtuma">

<label for="nimi">Tapahtuman nimi</label><br>
<input type="text" name ="nimi" required><br>

<label for="paivays">Tapahtuman päivämäärä</label><br>
<input type="date" name="paivays" required><br>

<br>
<input type="submit" value="Lisää tapahtuma"><br>
</form>
<?php
include "./views/partials/end.php";
?>