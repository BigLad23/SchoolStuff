<h3>10.1 salasanan suojaus </h3>
<?php

/*Seuraavien funktioiden (password_hash ja password_verify) avulla suojataan salasanat. Siis: Suojaa sana "salasana", tulosta se suojattuna. Vertaa suojattua sanaa toisessa muuttujassa olevaan samaan sanaan ja lisäksi sanaan "salainen". */



$muuttuja ="salasana";
$tokamuuttuja ="salainen";





$salattumuuttuja = password_hash($muuttuja,PASSWORD_DEFAULT); //hajottaa salasanan

echo $salattumuuttuja."<br>";





if(password_verify("salasana",$salattumuuttuja)) echo "ovat samat<br>";
else echo "Eivät osu <br>";

if(password_verify($tokamuuttuja,$salattumuuttuja)) echo "ovat samat<br>";
else echo "Eivät osu <br>";
?>

<h3>10.2 Merkkijonon sanitointi</h3>
<?php

$merkit = "<h1>hei! miten voit tänään?</h1>";

echo $merkit;
$sanitoidutmerkit = filter_Var($merkit,FILTER_SANITIZE_STRING);
echo $sanitoidutmerkit."<br>";
?>
<h3>10.3 kokonaisluvun validointi</h3>
<?php
$luku = "ttt";

if(filter_var($luku,FILTER_VALIDATE_INT)) echo "$luku on validi kokonaisluku";
else echo "$luku ei ole validi";
?>

<h3>9.4 URL:n validointi</h3>
<?php

$url = "https://www.leeniemi.net";

if(filter_var($url,FILTER_VALIDATE_URL) == TRUE) echo "$url on validi";
else echo "$url ei olve validi";
?>
<h3>10.5 EMAIL, validointi ja sanitointi<h3>
<?php
$email = "bruh@@example.ru";

//sanitointi
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo  $email."<br>";

if(filter_var($email,FILTER_VALIDATE_EMAIL)) echo "$email on ihan ok";
else echo $email."ei olve validi";
?>
<h3> 10.6 validointi: kokonaisluku oikeassa välissä</h3>

<?php

$number = 75;
if(filter_var($number, FILTER_VALIDATE_INT, array("options"=>array("min_range" => 0, "max_range" => 100)))) {
    echo  "$number on kokonaisluku ja välillä 0-100";
}
else {
    echo "$number ei ole kokonnaisluku väliltä 0-100";
}