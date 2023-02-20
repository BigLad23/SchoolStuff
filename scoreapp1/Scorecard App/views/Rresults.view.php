<?php
require "./views/partials/head.php";
?>
<!---Etusivun otsikko--->
<h1 id="frontpageh1">Ranking</h1>
<?php
foreach ($Rresults as $Rresult) { ?>
    <h3><?=$Rresult["placement"]; ?></h3>
    <h3><?=$Rresult["name"]; ?></h3>
<?php
}
require "./views/partials/end.php";
?>