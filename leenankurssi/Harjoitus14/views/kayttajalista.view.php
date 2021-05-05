<?php
include "./views/partials/adminhead.php";
if(isset($message)) echo $message;
?>



<h1>Kaikki Käyttäjät</h1>
<?php
foreach($kayttajat as $kayttaja) {?>

<h3><?= $kayttaja["kayttajatunnus"];?></h3>
<a href="./index.php?action=muokkaa&kayttajaID=<?= $kayttaja["kayttajaID"];?>">Muokkaa</a><br>
<a href="./index.php?action=poista&kayttajaID=<?= $kayttaja["kayttajaID"];?>">Poista</a><br>



<?php

}
include "./views/partials/end.php";
?>