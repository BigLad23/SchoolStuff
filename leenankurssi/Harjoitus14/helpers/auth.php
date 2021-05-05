<?php

function islogged()
{
    if(isset($_SESSION["kayttajaID"],$_SESSION["ip"]) && $_SESSION["ip"] == $_SERVER["REMOTE_ADDR"]) {
        return TRUE;
    } else return FALSE;
}

?>