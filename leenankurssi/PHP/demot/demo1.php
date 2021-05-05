<!doctype html>
<html lang="fi">
<head>
<title>php-demo</title>
</head>
<body>

<h2>1.1</h2>

<?php
echo "<h1>Hello World!</h1>";
?>


<?="Hello"?>





<?="\"Kun hyppäät ilosta ilmaan, <br>
 varo, <br>
  ettei kukaan vedä maata jalkojesi alta (Stanislaw Jerzy Lec) \"<br>";?>

<h2>1.6</h2>
<?php
$omanimi = "Lauri";

echo "Kirjoittajan nimi on $omanimi<br>";






$luku = 5;


echo "Muuttujassa luku on arvo $luku<br>";
?>

<h2>1.9</h2>

<?php
$summa = $luku + $luku;
$erotus = $luku - $luku;
$tulo = $luku * $luku;


echo "Lukujen $luku ja $luku summa on $summa <br>\n";
echo "Lukujen $luku ja $luku erotus on $erotus <br>\n";
echo "Lukujen $luku ja $luku tulo on $tulo <br>\n";

define("KERROIN_25",25);
define("KERROIN_50",50);



$vaalea = 10;
$tumma = 30;


$vaalea_auringossa_25 = (KERROIN_25 * $vaalea)/60;
$vaalea_auringossa_50 = (KERROIN_50 * $vaalea)/60;
$tumma_auringossa_25 = (KERROIN_25 * $tumma)/60;
$tumma_auringossa_50 = (KERROIN_50 * $tumma)/60;

echo "Vaalea auringossa kertoimella 25 voi olla $vaalea_auringossa_25 tuntia <br>\n";
echo "Vaalea auringossa kertoimella 25 voi olla $vaalea_auringossa_50 tuntia <br>\n";
echo "Tumma auringossa kertoimella 25 voi olla $tumma_auringossa_25 tuntia <br>\n";
echo "Tumma auringossa kertoimella 25 voi olla $tumma_auringossa_50 tuntia <br>\n";


echo <<<EOT
</body>
</html>
EOT;
?>
