<?php
include "./views/partials/adminhead.php";
if(isset($message)) echo $message;
?>



<h1>Kaikki Uutiset</h1>
<?php
foreach($uutiset as $uutinen) {?>

<h3><?= $uutinen["otsikko"];?></h3>
<a href="./index.php?action=muokkaa&id=<?= $uutinen["id"];?>">Muokkaa</a><br>
<a href="./index.php?action=poista&id=<?= $uutinen["id"];?>">Poista</a><br>



<?php

}
include "./views/partials/end.php";
?>