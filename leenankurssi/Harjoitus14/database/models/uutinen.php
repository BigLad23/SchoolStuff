<?php

require "./database/connection14.php";

function haeKaikkiUutiset()
{
    global $pdo;
    $sql = "SELECT * FROM uutinen";
    $stm = $pdo->query($sql);

    $uutiset = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $uutiset;
}

function haeUutinen($id)
{
    global $pdo;

    $sql = "SELECT * FROM uutinen WHERE id=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$uutinen);
    $stm->execute();

    $uutinen = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $uutinen;
}

function lisaaUutinen($data)
{
    global $pdo;
    $sql = "INSERT INTO uutinen (otsikko,sisalto,kirjoituspvm,poistumispvm,kirjoittaja) VALUES(?,?,?,?,?)";

    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;
}

function muokkaaUutista($data)
{
    $sql = "SELECT * FROM uutinen WHERE id = ?";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(1, $id);
    $stm->execute();

    $uutinen = $stm->fetchAll(PDO::FETCH_ASSOC);

    
    $otsikko = $uutinen[0]["otsikko"];
    $sisalto = $uutinen[0]["sisalto"];
    $kirjoituspvm = $uutinen[0]["kirjoituspvm"];
    $poistumispvm = $uutinen[0]["poistumispvm"];
    $kirjoittaja = $uutinen[0]["kirjoittaja"];

    $sql = "UPDATE uutinen SET otsikko = ?,sisalto = ?, kirjoituspvm = ?, poistumispvm = ?, kirjoittaja = ? WHERE id = ?";
    $stm = $pdo->prepare($sql);
    $stm->execute(array($otsikko,$sisalto,$kirjoituspvm,$poistumispvm,$kirjoittaja));
}

function poistaUutinen($id)
{
    global $pdo;
    $sql = "DELETE FROM uutinen WHERE id=?";
    $stm=$pdo->prepare($sql);
    $stm->bindValue(1,$id);
    if($stm->execute()) return TRUE;
    else return FALSE;
}