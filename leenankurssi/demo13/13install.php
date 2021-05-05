<?php
require "13connection.php";

$sql = "CREATE TABLE IF NOT EXISTS players (
    id int(10) NOT NULL AUTO_INCREMENT,
    account_name varchar(30) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(50) NOT NULL,
    last_login date NOT NULL,
    online tinyint(1) NOT NULL,
    money decimal(10,0) NOT NULL,
    current_character varchar(15) NOT NULL,
    banned tinyint(1) NOT NULL,
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";           


$statement = $pdo->query($sql);
if($statement) echo "Taulu lisätty";
?>

