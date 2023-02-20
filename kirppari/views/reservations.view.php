<?php
if(isset($message)) echo $message;
?>

<h1> Varauksia </h1>
<?php
foreach($reservations as $reservation) {?>

<div id="info">
<h3>Varatun paikan tyyppi:<?= $reservation["type"];?></h3>
<h3>Varatun paikkojen määrä:<?= $reservation["slotnumber"];?></h3>
</div>

<script>
function show() {
  var x = document.getElementById("info");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<?php
}
include "../views/partials/end.php";
?>