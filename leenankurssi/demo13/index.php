<?php
session_start();
// pyynnöt muodossa index.php?action=edit&id=5


if(isset($_GET["action"])) $action = $_GET["action"];
else $action = "index";


$method = strtolower($_SERVER["REQUEST_METHOD"]);



require "./controllers/playercontroller.php";
require "./helpers/auth.php";

switch($action) {
    case "index":
    indexcontroller();
    break;

    case "register":
    if($method=="get") require "./views/registerform.view.php";
    else postregister();
    break;

    case "login":
    if($method=="get") require "./views/loginform.view.php";
    else postlogin();
    break;

    case "logout":
    if(islogged()) logout();
    else indexcontroller();
    break;

    case "admin":
    if(islogged())
    admincontroller();
    else require "./views/loginform.view.php";
    break;

    case "delete":
    if(islogged()) deletecontroller();
    else require "./views/loginform.view.php";
    break;

    default:
    echo "ERROR:404 (bruh nyt ei jokin toimi)";
}
?>