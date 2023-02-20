<?php
if(isset($message)) echo $message;
?>

<div class="signuparea">
<h2 class="centered">Lisää kirpparipäivä</h2>
<form  action="/index.php?action=addevent" method="post">

<label for="duration">Kesto:</label>
<input type="number" name="duration" id="duration" min="1" max="100000" required><br>

<label for="startingtime">Aloituspäivä:</label>
<input type="date" name="startingtime" id="startingtime" required><br>

<label for="enddate">Lopetuspäivä:</label>
<input type="date" name="enddate" id="enddate" required><br>

<label for="tables">Pöydät:</label>
<input type="number" name="tables" id="tables" min="1" max="50" required><br>

<label for="carslots">Auto paikat:</label>
<input type="number" name="carslots" id="carslots" min="1" max="100000" required><br>

<label for="location">Kirpparin paikka:</label>
<input type="text" name="location" id="location" required><br>

<button type="submit" class="signupbutton">Lisää kirpparipäivä</button>
</form>
</div>
