<?php
if(isset($message)) echo "<hr>". $message ."<hr>";
require "./views/partials/head.php";
?>

<h1>Place a bet - League</h1>

<form method = "post" action="/index.php?action=betonevent">
<?php
//var_dump ($event);
echo $event[0]["name"];
foreach($contestants as $contestant) { ?>

    <h2><?= $contestant["name"];?></h2>
    <p><?= $contestant["lmatch_id"];?> </p>
    <input type = "number" name="guessedlranking"/>    

<?php
}
?>
<div class= "container text-center">
    <input type = "submit" class="btn-lg rounded-0" style="margin: 15px" value = "Bet"><br>
    </div>
</form>

<?php
require "./views/partials/end.php";
?>