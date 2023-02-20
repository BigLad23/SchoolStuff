<?php
if(isset($message)) echo $message;
?>
<h2>Tuotteet</h2>
<form method="post" action="/index.php?action=userproducts">
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
<? /* $username = "SELECT product.userid, user.username FROM user INNER JOIN product ON user.userid = product.userid"; */ ?>
<h3><?= $product["description"];?></h3>
<h3>Hinta: <?= $product["price"];?>€</h3>
<img src=<?=$product["imageurl"];?> width="150px"></img><br>

<?php
}


include "../views/partials/end.php";
?>