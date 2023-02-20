<?php
if(isset($message)) echo $message;
?>
<h2>Tuotteet</h2>
<form method="post" action="/index.php?action=adminproducts">
<select id="category" name="categoryid" required><br>
    <?php
    foreach($categories as $category) {
      echo "<option value=" . $category["categoryid"] . ">" . $category["categoryname"] . "</option><br>";
    }
      ?>
</select><br>
<input type="submit" value="hae">
</form>
<?php

foreach($products as $product) {?>
<h3><?= $product["description"];?></h3>
<h3><?= $product["price"];?>€</h3>
<img src=<?=$product["imageurl"];?> width="150px"></img><br>
<a href="./index.php?action=editproduct&productid=<?= $product["productid"];?>">Muokkaa</a><br>
<a href="./index.php?action=deleteproduct&productid=<?= $product["productid"];?>">Poista</a><br>

<?php
}


include "../views/partials/end.php";
?>