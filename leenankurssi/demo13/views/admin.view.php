<?php
include "./views/partials/adminhead.php";
if(isset($message)) echo $message;
?>


<h1>Kaikki pelaajat</h1>
<?php
foreach($players as $player) {?>

<h3><?= $player["account_name"];?></h3>
<a href="./index.php?action=edit&id=<?= $player["id"];?>">Muokkaa</a><br>
<a href="./index.php?action=delete&id=<?= $player["id"];?>">Poista</a><br>
<?php
}
include "./views/partials/end.php";
?>