<?php
require "connectirfron.php";
$nrows = $pdo->exec("DELETE FROM countries WHERE id IN (1, 2, 3)");

echo "The statement affected $nrows rows\n";




$stm = $pdo->query("SELECT * FROM countries");

$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach($rows as $row) {

    printf("$row[0] $row[1] $row[2]\n");
}

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);


$stm = $pdo->prepare("SELECT * FROM countries WHERE id = ?");
$stm->bindValue(1, $id);//kolmanneksi parametriksi voi laittaa parametrin tietotyypin, tässä PDO::PARAM_INT, 1 viittaa kysymysmerkkiin
$stm->execute();

$id = 12;

$stm = $pdo->prepare("SELECT * FROM countries WHERE id = ?");
$stm->bindValue(1, $id);
$stm->execute();

$row = $stm->fetch(PDO::FETCH_ASSOC);

echo "Id: " . $row['id'] . PHP_EOL;
echo "Name: " . $row['name'] . PHP_EOL;
echo "Population: " . $row['population'] . PHP_EOL;

echo "<br>";

$stm = $pdo->prepare("SELECT * FROM countries WHERE id = :id");
$stm->bindParam(":id", $id, PDO::PARAM_INT);
$stm->execute();

$name = "Suomi";
$population = 5521236;

$dsn = "mysql:host=localhost;dbname=mydb";
$user = "user12";
$passwd = "12user";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->prepare("INSERT INTO countries(name, population) VALUES(?,?);");
$stm ->execute(array($name,$population));

$sql = "CREATE TABLE words(id INT PRIMARY KEY AUTO_INCREMENT,
    word VARCHAR(255))";

$ret = $pdo->exec($sql);
$pdo->exec("INSERT INTO words(word) VALUES ('pen')");
$pdo->exec("INSERT INTO words(word) VALUES ('bum')");
$pdo->exec("INSERT INTO words(word) VALUES ('hum')");
$pdo->exec("INSERT INTO words(word) VALUES ('den')");

$rowid = $pdo->lastInsertId();

echo "Viimeksi lisätyn rivin id is: $rowid\n";






