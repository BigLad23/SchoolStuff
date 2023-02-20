<?php
if(isset($message)) echo $message;
?>

<h1> Admin view </h1>
<a href="./index.php?action=addproduct">Lisää tuote</a><br>
<a href="./index.php?action=addevent">Lisää kirpparipäivä</a><br>
<?php
include "../views/partials/end.php";
?>