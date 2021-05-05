<?php
if(isset($_POST["nimi"])) {
    $nimi = $_POST["nimi"];
    echo "Tervepä terve $nimi!";
}