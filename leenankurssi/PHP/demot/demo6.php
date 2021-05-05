<h1>Laskin</h1>
<form method="post">


<label for="luku1">Luku 1</label><br>
<input type="number" name="luku1" required><br>

<label for="luku"2>Luku 2</label><br>
<input type="number" name="luku2" required><br>

<input type="submit" name="laske" value="+">
<input type="submit" name="laske" value="-">
<input type="submit" name="laske" value="*">
<input type="submit" name="laske" value="/">
</form>
<h3>Vastaus</h3>


<?php

if(isset($_POST["luku1"], $_POST["luku2"], $_POST["laske"])) {
     $luku1 = htmlentities($_POST["luku1"]);
     $luku2 = htmlentities($_POST["luku2"]);
     $laske = htmlentities($_POST["laske"]);

    if($laske == "+") $vastaus = $luku1 + $luku2;
    if($laske == "-") $vastaus = $luku1 - $luku2;
    if($laske == "*") $vastaus = $luku1 * $luku2;
    if($laske == "/") $vastaus = $luku1 / $luku2;



    switch($laske) {
        case"+";
         $vastaus = $luku1 + $luku2;
         break;

         case"-";
         $vastaus = $luku1 - $luku2;
         break;

         case"*";
         $vastaus = $luku1 * $luku2;
         break;

         case"/";
         $vastaus = $luku1 / $luku2;
         break;

         default;
         break;
    } 

    echo "<h4>$vastaus</h4>";
    }
?>














