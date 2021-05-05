<h1>8.1</h1>
<?php
/* Laadi for-silmukkaa käyttäen 10 alkion taulukko $numerot, jossa kaikkien alkioiden arvo on aluksi 0. */


for($i = 0; $i < 10; $i++) {
    $numerot[$i]=0;

}
/*Tee seuraavien indeksin ja arvojen muutokset:

indeksiin 0 arvo 5
indeksiin 2 arvo 3
indeksiin 3 arvo 9
indeksiin 1 arvo 2
indeksiin 9 arvo 4 */


$numerot[0] = 5;
$numerot[2] = 3;
$numerot[3] = 9;
$numerot[1] = 2;
$numerot[9] = 4;
/* Tulosta taulukko print_r-funktiolla */
echo "print_r"; 
echo "<br>";
echo "<br>";
print_r($numerot);


echo "<br>";
echo "<br>";

/*Tulosta taulukko var_dump-funktiolla */
echo "var_dump";
echo "<br>";
echo "<br>";
var_dump($numerot);

echo "<br>";

/*Tulosta taulukon arvot for-silmukkaa käyttäen. */
echo "for";
echo "<br>";
echo "<br>";
for($i = 0; $i < sizeof($numerot); $i++) {
    echo  $numerot[$i];
}
echo "<br>";
/*Tulosta taulukon arvot foreach-silmukkaa käyttäen. */
echo "foreach";
echo "<br>";
echo "<br>";

$summa = 0;
foreach($numerot as $arvo) {
    echo $arvo. "<br>";
    $summa = $summa + $arvo;
}

echo "arvo yhteensä $summa <br>";
?>

<h1>8.2</h1>

<?php
$koulu = array();
$koulu["nimi"] = "TAO"; 
$koulu["osoite"] = "Sammonkatu 45";
$koulu["postinro"] = "33540";
$koulu["postitp"] = "TAMPERE";
$koulu["maa"] = "Suomi";

foreach($koulu as $avain => $arvo) {
    echo "$avain as $arvo <br>"; 
}

print_r($koulu);
echo "<br>";
var_dump($koulu);
 
echo "<br>";















