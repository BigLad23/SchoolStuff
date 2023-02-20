<?php
session_start();


require '../controllers/userManagement.php';
require "../helpers/auth.php";

if(isset($_GET["action"])) $action = $_GET["action"];
else $action = "index";
$method = strtolower($_SERVER['REQUEST_METHOD']);


switch($action) {
  case "index":
  indexcontroller();
  break;

  case "regularuser":
  regularusercontroller();
  break;
  
  case "users":
  usercontroller();
  break;

  case "admin":
  admincontroller();
  break;

  case "reserve":
  reservecontroller();
  break;

  case "reservespot":
  reservespot();
  break;

  case "adminevents":
  admineventcontroller();
  break;

  case "events":
  eventcontroller();
  break;

  case "userevents":
  usereventcontroller();
  break;

  case "products":
  productcontroller();
  break;
  
  case "userproducts":
  userproductcontroller();
  break;

  case "adminproducts":
  adminproductscontroller();
  break;

  case "regularproducts":
  regularproductcontroller();
  break;

  case "reserve":
  reservecontroller();
  break;

  case "userreserve":
  userreservecontroller();
  break;

  case "register":
  if($method=="get") require "../views/signup.view.php";
  else postregister();
  break;

  case "login":
  if($method=="get") require "../views/login.view.php";
  else postlogin();
  break;

  case "logout":
  if(islogged()) logout();
  else indexcontroller();
  break;

  case "edit":
    if(islogged()) {
      if($method=="get")
      getusercontroller();
      else postuseredit();
    }
  break;

  case "delete":
  if(islogged()) deletecontroller();
  else require "../views/login.view.php";
  break;
  
  case "addproduct":
  if(islogged()) productcontroller();
  else require "../views./login.view.php";
  break;

  case "editproduct":
    if(islogged()) {
      if($method=="get")
      editproductcontroller();
      else postproductedit();
    }
  break;

  case "deleteproduct":
  if(islogged()) deleteproductcontroller();
  else require "../views/login.view.php";
  break;

  case "addevent":
  if(islogged()) addeventcontroller();
  else require "../views/login.view.php";
  break;

  case "editevent":
  if(islogged()) {
    if($method=="get")
   editeventcontroller();
  else postediteventcontroller();
  }
  break;

  case "deleteevent":
  if(islogged()) deleteeventcontroller();
  else require "../views/login.view.php";
  break;

  default:
  echo "ERROR:404 (Nyt ei jokin toimi!)";
}
?>
