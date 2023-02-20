<?php
require "./views/partials/head.php";
?>
<?php
foreach ($Reventnames as $Reventname) { ?>

<a id="competition" href="./index.php?action=Rpoints"><?= $Reventname["name"]; ?></a><br>
<?php
}
require "./views/partials/end.php";
?>