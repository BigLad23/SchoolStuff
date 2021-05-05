<?php
require "/database/connection14.php";

$sql = "CREATE TABLE IF NOT EXISTS kayttajat (
    kayttajaID integer(10) NOT NULL AUTO_INCREMENT,
    kayttajatunnus varchar (50) NOT NULL,
    salasana varchar(255) NOT NULL,
    PRIMARY KEY (kayttajaID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
$statement1 = $pdo->query($sql);
if($statement1) echo "Käyttäjä taulu luotu";
?>