<?php
require "ympyra.php";
require "ympyra.view.php";




$nro = 1;


$ekaympyra = new ympyra(5,$nro);
$nro++;


$tokaympyra = new ympyra(12,$nro);
$nro++;

var_dump($ekaympyra);
var_dump($tokaympyra);

