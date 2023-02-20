<?php

require "../database/models/users.php";
require "../database/models/products.php";
require "../helpers/helper.php";



function indexcontroller()
{
    $users = GetAllUsers();
    $products = GetAllProducts();
    $fleetmarkets = GetAllEvents();
    require "../views/index.view.php";
}

function regularusercontroller()
{
    $users = GetAllUsers();
    $products = GetAllProducts();
    $fleetmarkets = GetAllEvents();
    $status = checkUserStatus();
    require "../views/user.view.php";
}

function admincontroller()
{
    $users = GetAllUsers();
    $products = GetAllProducts();
    $fleetmarkets = GetAllEvents();
    $categories = GetAllCategories();
    $status = checkUserStatus();
    require "../views/admin.view.php";
}

function usercontroller() 
{
    $users = GetAllUsers();
    $status = checkUserStatus();
    require "../views/users.view.php";
}

function eventcontroller()
{
    $fleetmarkets = GetAllEvents();
    require "../views/events.view.php";
}

function admineventcontroller()
{
    $users = GetAllUsers();
    $fleetmarkets = GetAllEvents();
    $status = checkUserStatus();
    require "../views/adminevents.view.php";
}

function usereventcontroller()
{
    $fleetmarkets = GetAllEvents();
    $status = checkUserStatus();
    require "../views/userevents.view.php";
}

function adminproductscontroller() 
{
    $products = NULL;
    if(isset($_POST["categoryid"])) {
        $products = GetCategoryProducts($_POST["categoryid"]);
    }
    else {
        $products = GetAllProducts();
    }
    $categories = GetAllCategories();
    $status = checkUserStatus();
    require "../views/adminproduct.view.php";
}

function userproductcontroller()
{
    $products = NULL;
    if(isset($_POST["categoryid"])) {
        $products = GetCategoryProducts($_POST["categoryid"]);
    }
    else {
        $products = GetAllProducts();
    }
    
    $categories = GetAllCategories();
    $status = checkUserStatus();
    require "../views/products.view.php";
}

function regularproductcontroller()
{
    $products = NULL;
    if(isset($_POST["categoryid"])) {
        $products = GetCategoryProducts($_POST["categoryid"]);
    }
    else {
        $products = GetAllProducts();
    }
    
    $categories = GetAllCategories();
    require "../views/regularproducts.view.php";
}

function reservecontroller()
{
    $users = GetAllUsers();
    $products = GetAllProducts();
    $reservations = GetAllReservations();
    $status = checkUserStatus();
    require "../views/reservations.view.php";
}

function userreservecontroller()
{
    $reservations = GetAllReservations();
    $status = checkUserStatus();
    require "../views/userreservations.view.php";
}

function marketcontroller()
{
    $users = GetAllUsers();
    $products = GetAllProducts();
    $status = checkUserStatus();
    require "../views/adddate.view.php";
}

function addeventcontroller()
{
    $status = checkUserStatus();
    if(isset($_POST["duration"],$_POST["startingtime"],$_POST["enddate"],$_POST["tables"],$_POST["carslots"],$_POST["location"]))
    {
        $duration = sanit($_POST["duration"]);
        $startingtime = $_POST["startingtime"];
        $enddate = $_POST["enddate"];
        $tables = sanit($_POST["tables"]);
        $carslots = sanit($_POST["carslots"]);
        $location = sanit($_POST["location"]);
        
        $data = array($duration,$startingtime,$enddate,$tables,$carslots,$location);
        if(addEvent($data))
        {
            $message = "Tapahtuman lisäys onnistui!";
            require "../views/admin.view.php";
        }
        else {
            $message = "Tapahtuman lisäys epäonnistui";
            require "../views/login.view.php";
            
        }
    } else {
            $message = "Lomakeen tiedot eivät ole kunnossa";
            require "../views/adddate.view.php";
        }
}

function productcontroller()
{
    $status = checkUserStatus();
    if(isset($_POST["categoryid"],$_POST["description"],$_POST["price"],$_POST["imageurl"]))
    {
        $userid = $_SESSION["userid"];
        $categoryid = sanit($_POST["categoryid"]);
        $description = sanit($_POST["description"]);
        $price = sanit($_POST["price"]);
        $imageurl = sanit($_POST["imageurl"]);
        
        $data = array($userid,$categoryid,$description,$price,$imageurl);
        if(addProduct($data)) {
            admincontroller();
        }
        else {
            $message = "Tuotteen lisääminen kantaan ei onnistu";
            require "../views/login.view.php";
        }
    } else {
       $message = "Lomakkeen tiedot eivät ole kunnossa";
       $categories = GetAllCategories();
        require "../views/addproduct.view.php";
    }
}



function reservespot() 
{
    checkUserStatus();
    if(isset($_POST["marketid"])) {
        $markets = GetEvent($_POST["marketid"]);
    }
    else {
        $markets = GetAllEvents();
    }
    if(isset($_POST["marketid"],$_POST["type"],$_POST["slotnumber"]))
    {
        $marketid = sanit($_POST["marketid"]);
        $userid = $_SESSION["userid"];
        $type = sanit($_POST["type"]);
        $slotnumber = sanit($_POST["slotnumber"]);

        $data = array($marketid,$userid,$type,$slotnumber);
        if(addReservation($data)) {  
            $message = "Varaus onnistui!";
            require "../views/user.view.php";
        }
        else {
            $message = "Varaus epäonnistui";
            require "../views/login.view.php";
        }
    } else {
          require "../views/reservespot.view.php";
    }
    
}

function postregister()
{
    if(isset($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["username"],$_POST["salasana"],$_POST["isadmin"]) && $_POST["salasana"]==$_POST["salasana2"])
    {
        $firstname = sanit($_POST["firstname"]);
        $lastname = sanit($_POST["lastname"]);
        $email = sanit($_POST["email"]);
        $username = sanit($_POST["username"]);
        $password = password_sanit($_POST["salasana"]);
        $isadmin = 0;

        $data = array($firstname,$lastname,$email,$username,$password,$isadmin);
        //var_dump($data);

        if(AddUser($data)) {
            indexcontroller();
        }
        else {
            $message ="Käyttäjän lisääminen kantaan ei onnistu";
            require "../views/login.view.php";
        }
    } else {
        $message = "Lomakkeen tiedot eivät ole kunnossa";
        require "../views/login.view.php";
    }
}

function postlogin()
{
    if(isset($_POST["username"],$_POST["salasana"])) {
        $username = sanit($_POST["username"]);
        $password = trim($_POST["salasana"]);

        //haetaan kannasta tietue, jossa ovat samat
        $ok = checkLogin($username,$password);
        if($ok) {
            $username = searchUser($username);
            $id = $username[0]["userid"];
            $ip = $_SERVER["REMOTE_ADDR"];
            $isadmin = $username[0]["isadmin"];


            $_SESSION["userid"] = $id;
            $_SESSION["ip"] = $ip;
            $_SESSION["isadmin"] = $isadmin;

            
            $products = GetAllProducts();
            $status = checkUserStatus();
            require "../views/user.view.php";
        } else {
            $message ="Joko salasana tai käyttäjänimi on väärin tai käyttäjää ei ole olemassa";
            require "../views/login.view.php";
        }
    }
}

function checkUserStatus()
{
    if ($_SESSION["isadmin"] == TRUE) {
        require "../views/partials/adminhead.php";
    } else {
        require "../views/partials/userhead.php";
    }
}



function logout()
{
    if(isset($_SESSION["ip"],$_SESSION["userid"]))
    {
        session_unset(); //poistaa kaikki istuntomuuttujat
        session_destroy(); //poistaa koko istunnon
        header("Location:./index.php");
    }
}

function getusercontroller()
{
    checkUserStatus();
    if(isset($_GET["userid"])) { 
        $user = $_GET["userid"];
        $user = getUserId($user);
        require "../views/edituser.view.php";
    } 
    else {
        $message = "Käyttäjää ei valittu";
        $users = GetAllUsers();
        require "../views/admin.view.php";
    }
}

function postuseredit()
{
    if(isset($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["username"],$_POST["salasana"],$_POST["isadmin"],$_POST["userid"]))
    {
        $firstname = sanit($_POST["firstname"]);
        $lastname = sanit($_POST["lastname"]);
        $email = sanit($_POST["email"]);
        $username = sanit($_POST["username"]);
        $password = password_sanit($_POST["salasana"]);
        if ($_POST["isadmin"] == "true") {
            $isadmin = 1;
        } else {
            $isadmin = 0;
        }
        $userid = $_POST["userid"];

        $data = array($firstname,$lastname,$email,$username,$password,$isadmin,$userid);
        if(UpdateUser($data)) {
            $message = "Käyttäjä muokattu";
            checkUserStatus();
            require "../views/admin.view.php";
        }
        else {
            $message ="Käyttäjän muokkaus ei onnistu";
            checkUserStatus();
            require "../views/admin.view.php";
        }
    } else {
        $message = "Lomakkeen tiedot eivät ole kunnossa";
        $users = GetAllUsers();
        $status = checkUserStatus();
        require "../views/admin.view.php";
    }
}


function editproductcontroller()
{
    if(isset($_POST["categoryid"])) {
        $categories = GetCategoryProducts($_POST["categoryid"]);
   } else {
       $categories = GetAllCategories();
   }
    checkUserStatus();
    if(isset($_GET["productid"])) { 
        $productID = $_GET["productid"];
        $product = getProductByid($productID);
        
        require "../views/editproduct.view.php";
    } 
    else {
        $message = "Tuotetta ei valittu";
        $products = GetAllProducts();
        require "../views/admin.view.php";
    }
}


function postproductedit()
{
    if(isset($_POST["categoryid"],$_POST["description"],$_POST["price"],$_POST["imageurl"],$_POST["productid"])) {
        $categoryid = sanit($_POST["categoryid"]);
        $description = sanit($_POST["description"]);
        $price = sanit($_POST["price"]);
        $imageurl = sanit($_POST["imageurl"]);
        $productid = $_POST["productid"];

        $data = array($categoryid,$description,$price,$imageurl,$productid);
        if(UpdateProduct($data)) {
            $message = "Tuote muokattu";
            checkUserStatus();
            require "../views/admin.view.php";
        }
        else {
            $message ="Tuotteen muokkaus ei onnistu";
            checkUserStatus();
            require "../views/admin.view.php";
        }
    } else {
        $message = "Lomakkeen tiedot eivät ole kunnossa";
        $categories = GetAllCategories();
        checkUserStatus();
        require "../views/editproduct.view.php";
    }
}

function editeventcontroller()
{
    checkUserStatus();
    if(isset($_GET["marketid"])){
        $marketID = $_GET["marketid"];
        $event = getEventById($marketID);
        require "../views/editevent.view.php";
}   else {
     $message = "Ei valittuna tapahtumaa";
     $events = getAllEvents();
     require "../views/admin.view.php";
    }
}

function postediteventcontroller()
{
    if(isset($_POST["duration"],$_POST["startingtime"],$_POST["enddate"],$_POST["tables"],$_POST["carslots"],$_POST["location"],$_POST["marketid"])) {
        $duration = sanit($_POST["duration"]);
        $startingtime = sanit($_POST["startingtime"]);
        $enddate = sanit($_POST["enddate"]);
        $tables = sanit($_POST["tables"]);
        $carslot = sanit($_POST["carslots"]);
        $location = sanit($_POST["location"]);
        $marketID = $_POST["marketid"];

        $data = array($duration,$startingtime,$enddate,$tables,$carslot,$location,$marketID);
        if(updateEvent($data)) {
            checkUserStatus();
            $message = "Muokkaus on tehty!";
            require "../views/admin.view.php";
        } else {
            checkUserStatus();
            $message = "Muokkaus ei onnistunut.";  
            require "../views/login.view.php";
        }
    } else { 
        checkUserStatus();
        $message = "Lomakkeesta puuttuu tietoja.";    
        require "../views/admin.view.php";
    }
}

function deletecontroller()
{
    if(isset($_GET["userid"])) {
        $id = $_GET ["userid"];
        $ok = deleteUser($id);
        if($ok) {
            admincontroller();
            $message = "Käyttäjä Poistettu";
        } else $message = "Käyttäjää ei poistettu kannasta";
    } else {
            $message = "Käyttäjää ei ole edes annettu";
            $users = GetAllUsers();
            require "../views/admin.view.php";
}
}

function deleteproductcontroller()
{
    if(isset($_GET["productid"])) {
        $id = $_GET["productid"];
        $ok = deleteProduct($id);
        if($ok) {
            admincontroller();
            $message = "Tuote Poistettu";
        } else
            $message = "Tuotetta ei poistettu kannasta";
    } else {
            $message = "Tuotetta ei ole edes annettu";
            $products = GetAllProducts();
            require "../views/admin.view.php";
}
$status = checkUserStatus();
}



function deleteeventcontroller()
{
    $status = checkUserStatus();
    if(isset($_GET["marketid"])) {
        $id = $_GET["marketid"];
        $ok = deleteEvent($id);
        if($ok) {
            $message = "Tapahtuma Poistettu";
        } else $message = "Tapahtumaa ei poistettu kannasta";
    } else $message = "Tapahtumaa ei ole edes annettu";
            $events = GetAllEvents();
            require "../views/admin.view.php";
}
