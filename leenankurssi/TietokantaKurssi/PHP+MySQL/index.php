<?php

session_start();

if(isset($_GET["action"])) $action = $_GET["action"];
else $action = "index";


$method = strtolower($_SERVER["REQUEST_METHOD"]);


require "./controllers/controller.php";


switch($action) {
    case "index":
    indexcontroller();
    break;

   
    case "lisaatapahtuma":
    if($method=="get") require "./views/lisaatapahtuma.view.php";
    else postadd();
    break;

    case "muokkaa":
    if($method=="get")
    geteditcontroller();
    else editcontroller();
    break;

    case "poista":
    deletecontroller();
    break;

    default:
    echo "ERROR:404 (bruh nyt ei jokin toimi)";
}