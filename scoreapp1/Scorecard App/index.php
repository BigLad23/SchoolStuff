<?php
session_start(); //aloittaa istunnon
//pyynnöt ovat muotoa index.php?action=edit&id=5

require "./helpers/auth.php";
require "./helpers/helper.php";
require "./database/connection.php";
//require "./database/connection_localhost.php";
require "./controllers/indexcontroller.php";
require "./controllers/usercontroller.php";
require "./controllers/eventcontroller.php";
require "./controllers/controller.php";

if (isset($_GET ["action"])) {
    $action = $_GET ["action"];
} else {
    $action = "index";
}

$method = strtolower($_SERVER["REQUEST_METHOD"]); //onko post vai get
//otetaan kirjastot käyttöön
switch ($action) {


    case "index":
        indexcontroller(); //funktio, joka hakee etusivun tarvitsemat asiat
        break;

    case "Reventchoose":
        if (islogged()) {
            if ($method == "get") {
                ReventNameController(); // hakee kaikki tarvittavat asiat tapahtuman valinta sivua varten
            } else {
                require "./views/Reventchoose.view.php";
            }
        }
    break; 
    
    case "Leventchoose":
        if (islogged()) {
            if ($method == "get") {
                LeventNameController(); // hakee kaikki tarvittavat asiat liiga valinta sivua varten
            } else {
                require "./views/Leventchoose.view.php";
            }
        }
    break; 

    case "Lresults":
       if (islogged()) {
           if ($method == "get") {
               Lresultscontroller(); // hakee kaikki asiat liiga tulos sivua varten
           } else {
               require "./views/Lresults.view.php";
           }
       }
        break;

    case "Rresults":
        if (islogged()) {
            if ($method == "get") {
                Rresultscontroller(); // hakee kaikki asiat ranking tulos sivua varten
            } else {
                require "./views/Rresults.view.php";
            }
        }
        break;


    case "competition":
         if (islogged()) {
             if ($method == "get") {
                 competitioncontroller(); // hakee kaikki liigat ja ranking sivut
             } else {
                 require "./views/Rresults.view.php";
             }
         }
        break;
        
    case "Lpoints":
         if (islogged()) {
             if ($method == "get") {
                 Lpointscontroller(); // hakee kaikki asiat piste sivua varten
             } else {
                 require "./views/Lpoints.view.php";
             }
         }
           break;

           case "Rpoints":
         if (islogged()) {
             if ($method == "get") {
                 Rpointscontroller(); // hakee kaikki asiat piste sivua varten
             } else {
                 require "./views/Rpoints.view.php";
             }
         }
           break;

    case "adminevents":
        if (islogged ()) {
            admineventscontroller ();
        } else {
            require "./views/loginform.view.php";
        }
        break;

    case "userevents":
        if (islogged ()) {
                geteventscontroller ();
         } else {
            header("Location: ./index.php?action=login");
        }
        break;

    /* The switch case below handles the routing for adding a new event.
       It checks whether or not the user is logged in, instructs in what views to present to the user
       and hands the request over to the eventcontroller.
    */

    case "addevent":
        if (islogged ()) {
            if ($method == "get")
                require "./views/createeventform.view.php";
            else
                postaddeventcontroller ();
        } else {
            header("Location: ./index.php?action=login");
        }
        break;
    
    /* The switch case below handles the editing of existing events.
        It checks whether or not the user is logged in and based on that hands the request 
        to either getediteventcontroller or postediteventcontroller.
    */

    case "editevent":
        if (islogged ()) {
            if ($method == "get") {
                getediteventcontroller ();
            } else {
                postediteventcontroller ();
            }
        }
        break;

    case "register":
        if ($method=="get") {
            require "./views/registrationform.view.php";
            } else {
                postregistercontroller();
            }
            break;

    case "login":
        if ($method =="get") {
            require "./views/loginform.view.php";
        } else {
            postlogincontroller();
        }
        break;

    case "logout":
        if (islogged()) {
            logoutcontroller();
        } else {
            indexcontroller();
        }
        break;

    case "deleteevent":
        if (islogged()) {
            deleteeventcontroller();
        } else {
            header("Location: ./index.php?action=login");
        }
        break;

    case "betonevent":
        if (islogged()){
            if ($method == "get"){
              betoneventcontroller();  
            } 
            else {
                postbetoneventcontroller();
            }            
        } else {
            header("Location: ./index.php?action=betonevent");
        }
    break;

    default:
        echo "404";
}
?>