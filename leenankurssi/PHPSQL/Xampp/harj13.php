<?php
require "harj13connection.php";

$sql = 'CREATE TABLE IF NOT EXISTS uutinen22 (
      `Otsikko` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `Sisalto` text COLLATE utf8_swedish_ci NOT NULL,
  `Kirjoituspvm` date DEFAULT NULL,
  `Poistamispvm` date DEFAULT NULL,
  `Kirjoittaja` varchar(50) COLLATE utf8_swedish_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREAMENT=1';

  $statement = $pdo->query($sql);
  if($statement) echo "Taulu lisätty";
  ?>
