<?php
require "./views/partials/head.php";
?>
<!---Etusivun otsikko--->
<h1 id="frontpageh1">League Results</h1>

<?php
foreach ($Lresults as $Lresult) { ?>

    <h3><?= $Lresult["results"]; ?></h3>

<?php
}
require "./views/partials/end.php";
?>