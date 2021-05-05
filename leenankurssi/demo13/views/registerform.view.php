<?php
include "./views/partials/head.php";
?>
<form method="post">

<label for="account_name">Käyttäjätunnus</label><br>
<input type="text" name ="account_name" required><br>

<label for="password">Salasana</label><br>
<input type="password" name="password" required><br>

<label for="password2">Salasana uudelleen</label><br>
<input type="password" name="password2" required><br>

<label for="email">Sähköposti</label><br>
<input type="email" name="email" required><br>

<label for="current_character">Hahmo</label><br>
<select name="current_character">
    <option value = "Monster">Monster</option>
    <option value = "Orc">Orc</option>
    <option value = "Warrior">Warrior</option>
    <option value = "Wizard">Wizard</option>
</select>
<br>
<input type="submit" value="Rekisteröi pelaaja"><br>
</form>
<?php
include "./views/partials/end.php";
?>
