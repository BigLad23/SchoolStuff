<?php

session_start();

if(isset($_GET["action"])) $action = $_GET["action"];
else $action = "index";


$method = strtolower($_SERVER["REQUEST_METHOD"]);


require "./controllers/controller.php";
require "./helpers/auth.php";

switch($action) {
    case "index":
    indexcontroller();
    break;

    case "rekisteroi":
    if($method=="get") require "./views/registerform.view.php";
    else postregister();
    break;

    case "lisaauutinen":
    if($method=="get") require "./views/lisaauutinenform.view.php";
    else lisaaUutinen();
    break;

    case "kirjaudu":
    if($method=="get") require "./views/kirjauduform.view.php";
    else postlogin();
    break;

    case "kirjauduulos":
    if(islogged()) logout();
    else indexcontroller();
    break;

    case "admin":
    if(islogged())
    admincontroller();
    else require "./views/kirjauduform.view.php";
    break;

    case "muokkaa":
    if(islogged())
    editcontroller();
    else require "./views/kirjauduform.view.php";
    break;

    case "poista":
    if(islogged()) deletecontroller();
    else require "./views/kirjauduform.view.php";
    break;
    
    case "kayttaja":
    kayttajacontroller();
    break;
    
    case "uutiset":
    uutiscontroller();
    break;


    default:
    echo "ERROR:404 (bruh nyt ei jokin toimi)";
}