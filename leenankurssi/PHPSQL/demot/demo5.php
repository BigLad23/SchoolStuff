<?php 




if(isset($_POST["nimi"],$_POST["ika"])) {
    $nimi = $_POST["nimi"];
    $ika = $_POST["ika"];
    echo "Hei $nimi, oletko todella $ika vuotta vanha?";
}
else {


?>

<form method="post">

<?php /* echo htmlentities($_SERVER['PHP_SELF']); */?>
<label for="nimi">Nimi</label><br>
<input type="text" name="nimi" required><br>


<label for="ika">Ikä</label><br>
<input type="number" min="7" max="65" name="ika" required><br>


<input type="reset" value ="tyhjennä">
<input type="submit" value="Lähetä">
</form>
<?php
}
?>
