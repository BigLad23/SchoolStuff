<?php
include "../views/partials/head.php";
if(isset($message)) echo $message;
?>

<h1>Kirpparin päivät</h1>
<?php
foreach($fleetmarkets as $fleetmarket) {?>

<h3><?= $fleetmarket["location"];?></h3>
<h3><?= $fleetmarket["startingtime"];?></h3>


<?php

}
include "../views/partials/end.php";
?>