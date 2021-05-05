<?php
require "./database/models/Player.php";
require "./helpers/helper.php";

function indexcontroller()
{
    $players = getAllPlayers();
    require "./views/index.view.php";
}
function admincontroller()
{
    $players = getAllPlayers();
    require "./views/index.view.php";
}
function postregister()
{
    if(isset($_POST["account_name"],$_POST["password"],$_POST["password2"],$_POST["email"],$_POST["current_character"]) && $_POST["password"]==$_POST["password2"])
    {
        $account_name = sanit($_POST["account_name"]);
        $password = password_sanit($_POST["password"]);
        $email = sanit($_POST["email"]);
        $current_character = sanit($_POST["current_character"]);
        $last_login = date('Y-m-d');

        $data = array($account_name,$password,$email,$last_login,$current_character);
        //var_dump($data);

        if(addplayer($data)) {
            indexcontroller();
        }
        else {
            $message ="Pelaajan lisääminen kantaan ei onnistu";
            require "./views/registerform.view.php";
        }


    } else {
        $message = "Lomakkeen tiedot eivät ole kunnossa";
        require "./views/registerform.view.php";
    }
}

function postlogin()
{
    if(isset($_POST["account_name"],$_POST["password"])) {
        $account_name = sanit($_POST["account_name"]);
        $password = trim($_POST["password"]);

        //haetaan kannasta tietue, jossa ovat samat
        $ok = loginplayer($account_name,$password);
        if($ok) {
            $player = getPlayerByName($account_name);
            $id = $player[0]["id"];
            $ip = $_SERVER["REMOTE_ADDR"];

            $_SESSION["id"] = $id;
            $_SESSION["ip"] = $ip;

            $players = getAllPlayers();
            require "./views/admin.view.php";
        } else {
            $message ="Käyttäjää ei löydy";
            require "./views/loginform.view.php";
        }


    } else {
        $message ="Käyttäjätunnus tai salasana puuttuu!";
        require "./views/loginform.view.php";
    }
}
    function logout()
    {
        if(isset($_SESSION["ip"],$_SESSION["id"]))
        {
            session_unset(); //poistaa kaikki istuntomuuttujat
            session_destroy(); //poistaa koko istunnon
            header("Location:./index.php");
        }
    }
function deletecontroller()
{
    if(isset($_GET["id"])) {
        $id = $_GET ["id"];
        $ok = deleteplayer($id);
        if($ok) {
            $message = "Pelaaja Poistettu";
        } else $message = "Pelaajaa ei poistettu kannasta";
    } else $message = "Pelaajaa ei ole edes annettu";
            $players = getAllPlayers();
            require "./views/admin.view.php";
}

