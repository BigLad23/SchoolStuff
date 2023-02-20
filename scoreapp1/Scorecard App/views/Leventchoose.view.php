<?php
require "./views/partials/head.php";
?>
<?php
foreach ($Leventnames as $Leventname) { ?>

<a id="competition" href="./index.php?action=Lpoints"><?= $Leventname["name"]; ?></a><br>
<?php
}
require "./views/partials/end.php";
?>