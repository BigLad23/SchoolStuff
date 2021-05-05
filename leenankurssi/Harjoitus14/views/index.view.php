<?php
include "./views/partials/head.php";
if(isset($message)) echo $message;
?>





<h1>Kaikki uutiset</h1>
<?php
foreach($uutiset as $uutinen) {?>

<h3><?= $uutinen["otsikko"];?></h3>

<?php

}
include "./views/partials/end.php";
?>