<?php 
require "./partials/alku.php";
require "./partials/navi.php";

if(isset($_GET["sivu"])) $sivu = $_GET["sivu"];
else $sivu = "demo1"; 


if(isset($_GET["kansio"])) $kansio = $_GET["kansio"];
else $kansio = "demot";

$sallitut = array("demo1","demo2", "demo3", "demo4", "demo4_lomakeenkasittelija", "demo5", "demo6", "demo7", "demo8", "demo9", "demo10", "demo11", "demo12", "demo13", "demo14", "demo15", "harj1", "harj2", "harj3", "harj4", "harj5", "harj6", "harj7", "harj8", "harj9", "harj10", "harj11", "harj12", "harj13", "harj14", "harj15", "opiskelija", "opetusryhma", "opeturyhma.view", "ympyra");

if(in_array($sivu,$sallitut)) {
    $polku = "./$kansio/$sivu.php";
    require $polku;
    echo "<h3>Lähdekoodi</h3>";
    echo highlight_file($polku,1);
}

require "./partials/loppu.php";




