<?php
if(isset($message)) echo $message;
?>


<div class="signuparea">
<h2 class="centered">Paikan Varaus</h2>
<form action="/index.php?action=reservespot" method="post">
    <label for="marketid">Tapahtuma:</label>
    <select name="marketid" id="marketid" required>
        <?php
        foreach($markets as $market) {
            echo "<option value=" . $market["marketid"] . ">" . $market["location"] . "</option><br>";
        }
        ?>
</select><br>
<label for="type">Tyyppi</label>
<select name="type" id="type" required>
<option value="blanket">Viltti</option>
<option value="carslot">Auto paikka</option>
</select><br>
<label for="slotnumber">Paikka: </label>
<input type="number" name="slotnumber" id="slotnumber" min="1" required><br>
<button type="submit" class="signupbutton">Varaa paikka</button>

        

</form>
</div>
