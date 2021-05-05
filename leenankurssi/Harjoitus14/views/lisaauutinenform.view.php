<?php
include "./views/partials/head.php";
?>
<form method="post">

<label for="otsikko">Otsikko</label><br>
<input type="text" name ="otsikko" required><br>

<label for="sisalto">Sisälto</label><br>
<input type="text" name="sisalto" required><br>

<label for="kirjoituspvm">kirjoituspvm</label><br>
<input type="date" name="kirjoituspvm" required><br>

<label for="poistumispvm">poistumispvm</label><br>
<input type="date" name="poistumispvm" required><br>


<br>
<input type="submit" value="Rekisteröi Käyttäjä"><br>
</form>
<?php
include "./views/partials/end.php";
?>