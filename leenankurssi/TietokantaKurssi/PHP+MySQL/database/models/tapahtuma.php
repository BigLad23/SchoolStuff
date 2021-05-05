<?php

require "./database/connection.php";


function haeKaikkiTapahtumat()
{
    global $pdo;
    $sql = "SELECT * FROM h6_tapahtumat";
    $stm = $pdo->query($sql);

    $tapahtumat = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $tapahtumat;
}

function lisaaTapahtuma($data)
{
    global $pdo;
    $sql = "INSERT INTO h6_tapahtumat (nimi,paivays) VALUES(?,?)";

    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;
}
function HaeTapahtumaid($id)
{
    global $pdo;

    $sql = "SELECT * FROM h6_tapahtumat WHERE tapahtumaID=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$id);
    $stm->execute();

    $tapahtuma = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $tapahtuma;
}

function muokkaaTapahtumaa($data)
{
    global $pdo;
    $sql = "UPDATE h6_tapahtumat SET nimi = ?, paivays = ? WHERE tapahtumaID= ?";

    $stm = $pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;
}

function poistaTapahtuma($id)
{
    global $pdo;
    $sql = "DELETE FROM h6_tapahtumat WHERE tapahtumaID=?";
    $stm=$pdo->prepare($sql);
    $stm->bindValue(1,$id);
    if($stm->execute()) return TRUE;
    else return FALSE;
}