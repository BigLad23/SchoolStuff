<!doctype html>
<html lang="fi">
<head>
<title>Harjoitus 5</title>
</head>
<body>

<h2>5.1</h2>

<?php

 
if(isset($_POST["rahanmaara"])) {
$rahanmaara = $_POST["rahanmaara"];
$bensahinta = 1.55;
$bensanmaara = $rahanmaara/$bensahinta;
echo "Sait $bensanmaara litraa bensaa";
}
else {


?>
<form method="post">
<label for="rahanmaara">Anna Raha määrä</label><br>
<input type="number" min="1" name="rahanmaara" required><br>

<input type="reset" value ="tyhjennä">
<input type="submit" value="Lähetä">
</form>
<?php
}
?>


<h2>5.2</h2>

<?php
if (isset($_POST["rahamaara"],$_POST["loppusumma"])) {
    $rahamaara = $_POST["rahamaara"];
    $loppusumma = $_POST["loppusumma"];
    $takaisin = $rahamaara - $loppusumma;
    echo "Saat $takaisin";
}

?>
<form method="post">
<label for="rahamaara">Anna Rahamäärä</label><br>
<input type="number" min="1" name="rahamaara" required><br>

<label for="loppusumma">Anna Loppusumma</label><br>
<input type="number" min="1" name="loppusumma" required><br>

<input type="reset" value ="tyhjennä">
<input type="submit" value="Lähetä">
</form>


<h2>5.3</h2>

<?php
if (isset($_POST["ALV"],$_POST["hinta"])) {
    $ALV = $_POST["ALV"];
    $hinta = $_POST["hinta"];
    $ALV2 = $ALV/100*$hinta;
    echo "alv on $ALV2 <br>"; 
    echo "Hinta on $hinta";
}
?>
<form method="post">
<label for="hinta">Anna hinta</label><br>
<input type="number" min="1" name="hinta" required><br>

<label for="ALV">Anna ALV%</label><br>
<input type="number" min="1" name="ALV" required><br>

<input type="reset" value ="tyhjennä">
<input type="submit" value="Lähetä">
</form>


<h2>5.4</h2>

<?php
$randomi = rand(1, 10) . "<br>\n";
?>

<h2>5.5</h2>






