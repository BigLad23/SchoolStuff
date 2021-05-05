<?php
include "./views/partials/head.php";
if(isset($message)) echo $message;
?>


<h1>Kaikki pelaajat</h1>
<?php
foreach($players as $player) {?>

<h3><?= $player["account_name"];?></h3>

<?php
}
include "./views/partials/end.php";
?>