<?php
require "connection.php";
$nrows = $pdo->exec("DELETE FROM countries WHERE id IN (1, 2, 3)");

echo "The statement affected $nrows rows\n";


$stm = $pdo->query("SELECT * FROM countries");

$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach($rows as $row) {

    printf("$row[0] $row[1] $row[2]\n");
}





