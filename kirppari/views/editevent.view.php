<?php
if(isset($message)) echo $message;
?>

<div class="signuparea">
<h2 class="centered">Lisää kirpparipäivä</h2>
<form action="/index.php?action=editevent" method="post">

<input type ="hidden" name="marketid" value="<?= $event["marketid"];?>">

<label for="duration">Tapahtuman kesto</label><br>
<input type ="number" name="duration" id="duration" value="<?= $event["duration"];?>" required><br>

<label for="startingtime">Aloituspäivä</label><br>
<input type="date" name="startingtime" id="startingtime" value="<?= $event["startingtime"];?>" required><br>

<label for="enddate">Lopetuspäivä</label><br>
<input type="date" name="enddate" id="enddate" value="<?= $event["enddate"];?>" required><br>

<label for="tables">Pöydät:</label><br>
<input type="number" name="tables"  id="tables" value="<?= $event["tables"];?>" required><br>

<label for="carslots">Auto paikat:</label><br>
<input type="number" name="carslots" id="carslots" value="<?= $event["carslots"];?>" required><br>

<label for="location">Location</label><br>
<input type="text" name="location" id="location" value="<?= $event["location"];?>" required><br>

<button type="submit" class="signupbutton">Muokkaa kirpparipäivää</button>
</form>

