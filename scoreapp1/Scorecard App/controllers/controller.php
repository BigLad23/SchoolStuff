<?php
require "./database/models/results.php";

// hakee kaikki tarvittavat asiat tapahtuma valinta sivua varten
function ReventNameController()
{
    $Reventnames = getAllREventNames();
    require "./views/Reventchoose.view.php";
}
// hakee kaikki tarvittavat asiat tapahtuma valinta sivua varten
function LeventNameController()
{
    $Leventnames = getAllLEventNames();
    require "./views/Leventchoose.view.php";
}
// hakee kaikki tarvittavat asiat liiga tuloksia varten
function Lresultscontroller()
{
    $Lresults = getAllLeagueResults();
    require "./views/Lresults.view.php";
}
// hakee kaikki tarvittavat asiat ranking tuloksia varten
function Rresultscontroller()
{
    $Rresults = getRankingResults();
    require "./views/Rresults.view.php";
}
// hakee kaikki tarvittavat asiat kilpailu lista sivua varten
function competitioncontroller()
{
    require "./views/competition.view.php";
}
// hakee veikkaukset
function betsController()
{
    $LBets = leagueBets($user);
    $RBets = rankingBets($user);
}
// hakee kaikki tarvittavat asiat ranking piste sivua varten
function Rpointscontroller()
{
    $sql = "SELECT rankingbets.user_id, rankingcontestant.event_id, event.event_id FROM ((event INNER JOIN    WHERE user_id=?";
    $event_id = "SELECT * FROM rankingcontestant WHERE event_id=?";
    $points =  countRankingPoints($_SESSION["id"], $event_id);
    require "./views/Rpoints.view.php";
}
// hakee kaikki tarvittavat asiat liiga piste sivua varten
function Lpointscontroller()
{
    $playerpoints = countLeaguePoints($_SESSION["id"]);
    require "./views/Lpoints.view.php";
}
