<?php
if(isset($message)) echo $message;
?>



<div class="signuparea">
<h2 class="centered">Muokkaa tuotetta</h2>
<form action="/index.php?action=editproduct" method="post">
    <input type="hidden" name="productid" value="<?= $product["productid"] ?>">
    Description: <input type="text" name="description" maxlength=255 value="<?= $product["description"]?>"><br>
    <label for="categoryid">Tuotteen kategoria:</label>
    <select id="category" name="categoryid"><br>
    <?php
      foreach($categories as $category) {
        echo "<option value=" . $category["categoryid"] . ">" . $category["categoryname"] . "</option><br>";
      }
      ?>
</select><br>
    <label for="price">Hinta:</label>
    <input type="number" name="price" min="1" max="100000" value="<?= $product["price"]?>"><br>
    <label for="imageurl">Kuva:</label>
    <input type="text" name="imageurl" value="<?= $product["imageurl"]?>"><br>
    <button type="submit" class="signupbutton">Lisää tuote</button>
</form>
</div>
</div>