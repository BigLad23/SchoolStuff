<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("../harjoitukset/books.xml");
print $xmlDoc->saveXML();
?>