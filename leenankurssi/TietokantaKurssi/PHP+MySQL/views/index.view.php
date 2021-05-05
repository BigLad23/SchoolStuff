<?php
include "./views/partials/head.php";
if(isset($message)) echo $message;
?>





<h1>Kaikki tapahtumat</h1>
<?php
foreach($tapahtumat as $tapahtuma) {?>

<h3><?= $tapahtuma["nimi"];?></h3>
<a href="./index.php?action=muokkaa&tapahtumaID=<?= $tapahtuma["tapahtumaID"];?>">Muokkaa</a><br>
<a href="./index.php?action=poista&tapahtumaID=<?= $tapahtuma["tapahtumaID"];?>">Poista</a><br>

<?php

}
include "./views/partials/end.php";
?>