<?php
date_default_timezone_set("Europe/Helsinki");

echo "Sekunteja vuodesta 1970".time();
echo "<br>";




echo date('d.m.y');
echo "<br>";
echo date('l');




echo "<br>";
echo date('Y-m-d');






$aika = 18000;
echo "<br>";
echo date('d.m.Y',$aika);
$paiva = 6;
$kk = 12;
$vuosi = 2019;

$tunnit = 18;
$minuutit = 15;
$sekunnit = 10;



$aika = mktime($tunnit,$minuutit,$sekunnit,$kk,$paiva,$vuosi);
echo "<br>";
echo "mktimellä muutettu 6.12.19";
echo "<br>";
echo $aika;
echo "<br>";
echo date('d.m.Y H:i',$aika);
echo "<br>";

function palautaPvm()
{
    $aika = date('d.m.y');
    return $aika;
}

echo  palautaPvm()."<br>";

// funktio laskee ajankohdan tästä päivästä kaksi viikkoa eteenåäin ja palauttaa sen MySQL-tietokantaan hyväksymässä muodossa
function laskeLoppumisPvm()
{
    $aika = date('Y-m-d'); //aika nyt
    $aika_kahden_viikon_paasta = date('Y.m.d', strtotime("$aika + 14 days"));
    return $aika_kahden_viikon_paasta;
}
echo laskeLoppumisPvm();

//Laskee keston kahden päivämäärän välillä

function laske_kesto($alkuaika,$loppuaika) //ajat merkkijonoissa
{
    //muunnetaan merkkijonoja...
    $alku = data_create($alkuaika);
    $loppu = data_create($loppuaika);
    $ero = date_diff($alku,$loppu);
    return $ero;
}

$aika_aluksi = "2008-06-18";
$aika_lopuksi = "2015-12-30";


$erotus = laske_kesto($aika_aluksi,$aika_lopuksi);
echo $erotus->format("%a days"). "<br>";
echo $erotus->format("%y Year %m Month %d day");
