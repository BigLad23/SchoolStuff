<?php
if(isset($message)) echo $message;
?>

<h1>Kirpparin päivät</h1>
<?php
foreach($fleetmarkets as $fleetmarket) {?>

<h3><?= $fleetmarket["location"];?></h3>
<h3><?= $fleetmarket["startingtime"];?></h3>
<a href="./index.php?action=editevent&marketid=<?= $fleetmarket["marketid"];?>">Muokkaa</a><br>
<a href="./index.php?action=deleteevent&marketid=<?= $fleetmarket["marketid"];?>">Poista</a><br>


<?php

}
include "../views/partials/end.php";
?>