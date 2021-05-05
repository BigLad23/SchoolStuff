<h1>7.1</h1>
<?php
/*Laadi for-rakenteen avulla silmukka, joka toistuu 10 kertaa ja tulostaa joka kerta kierroksen numeron.*/
for ($i = 1; $i <= 10; $i++) echo $i. "<br>";



/*Laadi samaan tiedostoon 10 kertaa toistuva silmukka, joka laskee kierrosnumeroiden summan.*/

$summa = 0;
for($i = 1; $i <= 10; $i++) $summa = $summa + $i;
echo "summa on ".$summa. "<br>";


/*Laadi samaan tiedostoon silmukka, joka tulostaa arvot 10:stä yhteen.*/

for($i = 10; $i > 0; $i--) echo $i. "<br>";


/*Laadi for-rakenteen avulla silmukka, joka tulostaa html-taulukkoon 20 x 20 kertotaulun. */

echo "<br><table>";

for($j = '*'; $j <= 20; $j++)  {
    echo "<tr>\n";
    for($i = '*'; $i <= 20; $i++) {
    
        echo "<td>\n";
        $vastaus = $i * $j;
        echo $vastaus;
        echo "</td>\n";
    }
    echo "</tr>\n";
 } 
echo "</table>\n";
?>

<h1>7.2</h1>


<?php




echo "while 1<br>";
$i = 1;
while($i <= 10) {
    echo $i. "<br>";
    $i++;
}

/* Laadi silmukka, joka tulostaa arvot 10:stä yhteen. */
$i = 10;
while($i > 0) {
    echo "$i<br>";
    $i--;
}

/* Arvo satunnainen numero ja käy läpi silmukan avulla luvut 1:stä kymmeneen sekä kerro kuvaruudulla onko kierrosluku sama, isompi vai pienempi kuin arvottu luku.*/

$satunnainen = rand(1,10);
$i = 1;

while($i <= 10) {
    if($satunnainen == $i) echo "luvut $i ja $satunnainen ovat samat<br>";
    elseif ($satunnainen > $i) echo "kierrosluku $i on pienempi kuin $satunnainen<br>";
    else echo "Kierrosluku $i on suurempi kuin $satunnainen<br>";
    $i++;
}