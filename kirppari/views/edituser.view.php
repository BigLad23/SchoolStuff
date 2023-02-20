<?php
if(isset($message)) echo $message;
?>



<div class="signuparea">
<h2 class="centered">Muokkaa käyttäjää</h2>
<form action="/index.php?action=edit" method="post"> 
<input type ="hidden" name="userid" value="<?= $user["userid"];?>">

<label for="firstname">Etunimi:</label>
<input type="text" name="firstname" value="<?= $user["firstname"];?>" required><br>
<label for="lastname">Sukunimi:</label>
<input type="text" name="lastname" value="<?= $user["lastname"];?>" required><br>
<label for="email">Sähköposti:</label>
<input type="text" name="email" value="<?= $user["email"];?>" required><br>
<label for="username">Käyttäjätunnus:</label>
<input type="text" name="username" value="<?= $user["username"];?>" required><br>
<label for="salasana">Salasana:</label>
<input type="password" name="salasana" required><br>

<?php
$admincheck = isset($_GET["isadmin"]) ? 1 : 0;
?>

<label for="isadmin">Onko admin?</label>
<input type="hidden" name="isadmin" value="false" />
<input type="checkbox" name="isadmin" id="isadmin" value="true"><br>
<button type="submit" class="signupbutton">Muokkaa käyttäjää</button>
</form>
</div>

<?php
include "../views/partials/end.php";
?>