<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Harjoitus 3</title>
</head>
<body>
<h1> rand 3.1</h1>
<?php
echo(rand() . "<br>\n");
echo(rand() . "<br>\n");
echo(rand(1,1000));
?>

<h2> Pyöristykset 3.2 <h2>
<?php
echo(round(1.5) . "<br>\n");
echo(round(1.456) . "<br>\n");
echo(round(68995) . "<br>\n");
echo(round(124.558) . "<br>\n");
echo(round(3.14) . "<br>\n");
?>
<h2> Ehtolauseet 3.3 <h2>
<?php
$randomi = rand(1, 20) . "<br>\n";
if ($randomi % 2 === 0) {
    echo "$randomi on parillinen. <br>";
} else {
    echo "$randomi on pariton. <br>";
}
echo "randomi oli $randomi";
?>
<h2> Ehtoja ja satunnaislukuja 3.4 <h2>
<?php
$randomi2 = rand(1, 100) . "<br>\n";
if (in_array($randomi2, range(30,50))) {
    echo "$randomi2 on pienehkö. <br>";
} elseif ($randomi2 < 10) {
    echo "$randomi2 on ääriarvo <br>";
} 
elseif ($randomi2 > 90) {
    echo "$randomi2 on ääriarvo <br>";
}
elseif ($randomi2%2==0 && $randomi2 < 50) {
    echo "$randomi2 on pieni ja parillinen <br>";
}
elseif ($randomi2 !==  '35') {
    echo "ei 35 <br>";
}
echo "randomi oli $randomi2 <br>"
?>
<h2>3.5 Ehtolauseet ja lukumuunnokset</h2>
<?php
$potenssi = 3 * 3 * 3;
echo sqrt(146), "<br> on isopi kuin $potenssi";
?>
</body>
</html>

