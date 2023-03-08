<?php
header ("Content-Type:text/xml");
echo ("<?xml version='1.0' encoding='UTF-8'?>\n");
/*echo ("<?xml-stylesheet type='text/xsl' href='clients.xsl'?>\n");*/

// tietokantayhteys PDO
try {
 $connection = new PDO("mysql:host=samarium;dbname=19laukor", "19laukor", "salasana");
} catch (PDOException $e) {
 die("ERR: " . $e->getMessage());
}
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->exec("SET NAMES utf8");

$query = $connection->prepare("SELECT * FROM clients");
$query->execute();
echo ("<clients>". "\n");

while($row = $query->fetch()) {
    echo "<client id='" . $row ['idClient'] . "'>". "\n";
    echo "<firstname>" . $row ['FirstName'] . "</firstname>\n";
    echo "<lastname>" . $row ['LastName'] . "</lastname>\n";
    echo "</client>". "\n";
}

echo ("</clients>"); 

?>