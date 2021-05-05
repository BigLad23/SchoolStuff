<!doctype html>
<html lang="fi">
<head>
<title>php-harjoitus 2</title>
</head>
<h2>Harjoitus 2.1 (Ikä lasku juttu)</h2>
<?php
$aidinika = 35;
$isanika = 35;
$lapsenika = 5;
$vuosi = 2019;

$yhteensa = $aidinika + $isanika + $lapsenika;
$aidinikakunsailapsen = $aidinika - $lapsenika;
$isansyntymavuosi = $vuosi - $isanika;

echo "Isän ikä on $isanika, äidin ikä on $aidinika, lapsen ikä on $lapsenika, heidän iät on yhteensä $yhteensa <br>\n";
echo "Äiti sai lapsen kun hän oli $aidinikakunsailapsen <br>\n";
echo "Isä synty vuonna $isansyntymavuosi <br>\n";
?>
<h2>Harjoitus 2.2<h2>
<?php

$alv = 0.24;
