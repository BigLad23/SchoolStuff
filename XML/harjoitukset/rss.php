<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("../harjoitukset/rss.xml");
$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
	print $item->nodeName . " = " . $item->nodeValue . "<br />";
}
// tietokantayhteys PDO
try {
 $connection = new PDO("mysql:host=samarium;dbname=19laukor", "19laukor", "salasana");
} catch (PDOException $e) {
 die("ERR: " . $e->getMessage());
} 
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->exec("SET NAMES utf8");

$query = $connection->prepare("SELECT * FROM news");
$query->execute(); 

?>