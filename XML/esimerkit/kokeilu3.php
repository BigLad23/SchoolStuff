<?php
 // määritellään content-type:
 header("Content-type: text/xml");
 
 // xml-dokumentti:
  $doc = new DOMDocument('1.0', 'utf-8');
 
 // juurielementti
 $node = $doc->createElement("luvut");
 $parentnode = $doc->appendChild($node);
 
 // kokeillaan elementtien ja attribuuttien lisäämistä
 for ($i = 0; $i < 10; $i++) {
   $node = $doc->createElement("luku");
   $newnode = $doc->createElement('nimi', 'teksti');
   $newnode = $parentnode->appendChild($node);
   $newnode->setAttribute("id", $i);
   $newnode->setAttribute("kuvaus", "luku_" . $i );
 }
 // xml-tiedoston tallennus ja tulostus
 $xmlfile = $doc->saveXML();
 echo $xmlfile;
?>