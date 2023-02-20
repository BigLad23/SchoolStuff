<?php
include "../views/partials/head.php";
if(isset($message)) echo $message;
?>

<h1> Varauksia </h1>
<?php
foreach($reservations as $reservation) {?>
<h3>Varatun paikan tyyppi:<?= $reservation["type"];?></h3>
<h3>Varatun paikkojen määrä:<?= $reservation["slotnumber"];?></h3>
<?php
}
include "../views/partials/end.php";
?>