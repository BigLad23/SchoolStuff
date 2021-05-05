<h1>7.1</h1>
<?php
$nimi = "lauri";
for($i = 1; $i <= 10; $i++) {
echo $nimi. "<br>";
}
?>
<h1>7.2</h1>
<?php
$y = date('Y');
for($y = 2020; $y <= 2025; $y++) {
echo $y. "<br>";
}
?>
<h1>7.3</h1>
<?php
echo "<br><table>";
while(isset($_POST["pituus"],$_POST["määrä"])) {
    $pituus = $_POST["pituus"];
    $määrä = $_POST["määrä"];
    $i = '*';
    
}
?>
<form>
<label for="pituus">Pituus</label><br>
<input type="number" min="1" max="10" name="pituus" required><br>

<label for="määrä">määrä</label><br>
<input type="number" min="1" max="10" name="määrä" required><br>


<input type="reset" value ="tyhjennä">
<input type="submit" value="Lähetä">
</form>

