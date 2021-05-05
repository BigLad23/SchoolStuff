<?php
session_start();


require 'helpers/helper.php';
require 'controllers/userManagement.php';
require 'controllers/productManagement.php';

if(isset($_GET["action"])) $action = $_GET["action"];
else $action = "index";
$method = strtolower($_SERVER['REQUEST_METHOD']);


switch($action) {
  case "index":
  indexcontroller();
  break;

  case "register":
  if($method=="get") require "./views/signupview.php";
  else postregister();
  break;

  case "login":
  if($method=="get") require "./views/loginview.php";
  else postlogin();
  break;

  default:
  echo "ERROR:404 (bruh nyt ei jokin toimi!)";
}
?>
