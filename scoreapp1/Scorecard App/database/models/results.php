<?php
// hakee kaikki ranking tapahtumat
function getAllREventNames()
{
    global $pdo;

    $sql = "SELECT * FROM event WHERE type=2";
    $stm = $pdo->query($sql);
    $Reventnames = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $Reventnames;
}

// hakee kaikki ranking tapahtumat
function getAllLEventNames()
{
    global $pdo;

    $sql = "SELECT * FROM event WHERE type=1";
    $stm = $pdo->query($sql);
    $Leventnames = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $Leventnames;
}

// hakee kaikki liiga tulokset
function getAllLeagueResults()
{
    global $pdo;
    $sql = "SELECT * FROM leaguematch";
    $stm = $pdo->query($sql);
    $Lresults = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $Lresults;
}

// Hakee liiga ottelun
function getLeagueMatch($id)
{
    global $pdo;

    $sql = "SELECT * FROM leaguematch WHERE lmatch_id=?";

    $stm= $pdo->prepare($sql);
    $stm->bindValue(1, $Lresult);
    $stm->execute();

    $Lresult = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $Lresult;
}


// hakee rankingit
function getRankingResults()
{
    global $pdo;
    $sql = "SELECT * FROM rankingcontestant";
    $stm = $pdo->query($sql);
    $Rresults = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $Rresults;
}

// hakee liiga tulokset että voimme laskea pisteet
function leaguePoints()
{
    global $pdo;

    $sql = "SELECT * FROM leaguematch WHERE results=?";
    $stm = $pdo->query($sql);
    $Lpoints = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $Lpoints;
}

// hakee ranking tulokset että voimme laskea pisteet
function rankingPoints()
{
    global $pdo;

    $sql = "SELECT * FROM rankingcontestant WHERE placement=?";
    $stm = $pdo->query($sql);
    $Rpoints = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $Rpoints;
}

// hakee käyttäjän liiga veikkaukset
function leagueBets($user)
{
    global $pdo;

    $sql = "SELECT * FROM leaguebets WHERE guessedranking=?";
    $stm = $pdo->query($sql);
    $Rpoints = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $LBets;
}

// hakee köyttäjän ranking veikkaukset
function rankingBets($user)
{
    global $pdo;

    $sql = "SELECT * FROM rankingbets WHERE guessedranking=?";
    $stm = $pdo->query($sql);
    $Rpoints = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $RBets;
}

// laskee liiga pisteet
function countLeaguePoints($user)
{
    global $pdo;

    $sql = "SELECT * FROM `leaguematch` INNER JOIN leaguebets ON leaguematch.lmatch_id = leaguebets.lmatch_id WHERE user_id=?";
    $stm= $pdo->prepare($sql);
    $stm->bindValue(1, $user);
    $Lpoints = $stm->execute();
    $Lpoints = $stm->fetchAll(PDO::FETCH_ASSOC);
    // lasketaan pisteet
    $playerpoints = 0;
    foreach ($Lpoints as $Lpoint) {
        if ($Lpoint["results"] == $Lpoint["guessedlranking"]) {
            $playerpoints += 2;
        }
    }
    return $playerpoints;
}

// laskee ranking pisteet
function countRankingPoints($user, $event_id)
{
    global $pdo;

    $sql =  "SELECT * FROM `rankingcontestant` INNER JOIN rankingbets ON rankingcontestant.contestant_id = rankingbets.contestant_id WHERE user_id=?";
    $stm= $pdo->prepare($sql);
    $stm->bindValue(1, $user);
    $Rpoints = $stm->execute();
    $Rpoints = $stm->fetchAll(PDO::FETCH_ASSOC);
    // lasketaan pisteet
    $sql2 = "SELECT COUNT(*) AS maxPoints FROM rankingcontestant WHERE event_id=?";
    $stm= $pdo->prepare($sql2);
    $stm->bindValue(1, $event_id);
    $stm->execute();
    $Rplayerpoints = $stm->fetchAll(PDO::FETCH_ASSOC);
    foreach ($Rpoints as $Rpoint) {
        $points = $Rplayerpoints[0]["maxPoints"] - abs($Rpoint["guessedranking"] - $Rpoint["placement"]);
    }
    return $points;
}
