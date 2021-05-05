<?php

require "/database/connection14.php";

$sql = "CREATE TABLE IF NOT EXISTS uutinen (
    id int(10) NOT NULL AUTO_INCREMENT,
    otsikko varchar(50) NOT NULL,
    sisalto text NOT NULL,
    kirjoituspvm date NULL,
    poistumispvm date NULL,
    kirjoittaja varchar(50) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
$statement = $pdo->query($sql);
if($statement) echo "Uutinen taulu luotu";




?>