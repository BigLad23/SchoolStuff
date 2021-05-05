<?php

require "./database/connection14.php";

function haeKaikkiKayttajat()
{
    global $pdo;
    $sql = "SELECT * FROM kayttajat";
    $stm = $pdo->query($sql);

    $kayttajat = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $kayttajat;
}

function lisaaKayttaja($data)
{
    global $pdo;
    $sql = "INSERT INTO kayttajat (kayttajatunnus,salasana) VALUES(?,?)";
    
    
    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;  
}

function paivitaKayttaja($id)
{
    global $pdo;
    $sql = "UPDATE kayttajat SET kayttajatunnus = ?, salasana = ? WHERE kayttajaID=?";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(1,$id);
    if($stm->execute()) return TRUE;
    else return FALSE;
    
}


function poistaKayttaja($id)
{
    global $pdo;
    $sql = "DELETE FROM kayttajat WHERE kayttajaID=?";
    $stm=$pdo->prepare($sql);
    $stm->bindValue(1,$id);
    if($stm->execute()) return TRUE;
    else return FALSE;
}

function tarkistaLogin($kayttaja,$password)
{
    global $pdo;

    $sql = "SELECT kayttajaID,kayttajatunnus,salasana FROM kayttajat WHERE kayttajatunnus=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$kayttaja);
    $stm->execute();

    $kayttaja = $stm->fetchAll(PDO::FETCH_ASSOC);
    if($kayttaja) {
        if(password_verify($password,$kayttaja[0]["salasana"])) {
            return TRUE;
        } else return FALSE;
    } else return FALSE;
} 

function haeId($kayttaja)
{
    global $pdo;

    $sql = "SELECT * FROM kayttajat WHERE kayttajatunnus=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1,$kayttaja);
    $stm->execute();

    $kayttaja = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $kayttaja;
}
