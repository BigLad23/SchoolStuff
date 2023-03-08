<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("../harjoitukset/books.xml");
$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
	print $item->nodeName . " = " . $item->nodeValue . "<br />";
}
?>