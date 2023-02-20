<?php
if(isset($message)) echo $message;
?>



<h1>Kaikki Käyttäjät</h1>
<?php
foreach($users as $user) {?>

<h3><?= $user["username"];?></h3>
<a href="./index.php?action=edit&userid=<?= $user["userid"];?>">Muokkaa</a><br>
<a href="./index.php?action=delete&userid=<?= $user["userid"];?>">Poista</a><br>



<?php

}
include "../views/partials/end.php";
?>