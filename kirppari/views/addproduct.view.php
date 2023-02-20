<?php
if(isset($message)) echo $message;
?>

<div class="signuparea">
<h2 class="centered">Lisää tuote</h2>
<form  action="/index.php?action=addproduct" method="post">
    Description: <input type="text" name="description" maxlength=255 required><br>
    <label for="categoryid">Tuotteen kategoria:</label>
    <select id="category" name="categoryid" required><br>
    <?php
    foreach($categories as $category) {
      echo "<option value=" . $category["categoryid"] . ">" . $category["categoryname"] . "</option><br>";
    }
      ?>
</select><br>
    Price: <input type="number" name="price" min="1" max="100000"><br>
    Image URL: <input type="text" name="imageurl"><br>
    <button type="submit" class="signupbutton">Lisää tuote</button>
</form>
</div>
</div>
