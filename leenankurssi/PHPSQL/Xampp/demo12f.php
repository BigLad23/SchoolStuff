<?php
if(isset($_GET["message"])) {
    $message = $_GET["message"];
    switch ($message) {
        case "ok";
        echo "Tietoja muutettu";
        break;

        case "no";
        echo "muutos ei siirtynyt tietokantaan<br>";
        break;

        case "eitietoja";
        echo "lomakeesta puuttuu tietoja<br>";
        break;

        default;
        echo "mitäs nyt tapahtu jotain outoa<br>";
    }
}
require "connection.php";

$sql = "SELECT id,account_name FROM players";
$stm = $pdo->query($sql);

$players = $stm->fetchAll(PDO::FETCH_CLASS);


foreach($players as $player) {
    echo "$player->account_name<br><a href=\"demo12g.php?id=$player->id\">Poista</a><br>";
    //tarkoituksella sama asia toisella tavalla
    ?>
    <a href="demo12h.php?id=<?=$player->id;?>">Muokkaa</a><br>

    <?php
}