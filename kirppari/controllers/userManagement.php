<?php

require "./database/models/users.php";
require "./helpers/helper.php";



function indexcontroller()
{
    $users = getAllUsers();
    require "./views/etusivu.php";
}

function admincontroller()
{
    $users = getAllUsers();
    require "./views/admin.view.php";
}
function postregister()
{
    if(isset($_POST["username"],$_POST["salasana"]) && $_POST["salasana"]==$_POST["salasana2"])
    {
        $username = sanit($_POST["username"]);
        $password = password_sanit($_POST["salasana"]);
        

        $data = array($username,$password);
        //var_dump($data);

        if(AddUser($data)) {
            admincontroller();
        }
        else {
            $message ="Käyttäjän lisääminen kantaan ei onnistu";
            require "./views/loginview.php";
        }


    } else {
        $message = "Lomakkeen tiedot eivät ole kunnossa";
        require "./views/loginview.php";
    }
}
function postlogin()
{
    if(isset($_POST["username"],$_POST["salasana"])) {
        $username = sanit($_POST["username"]);
        $password = trim($_POST["salasana"]);

        //haetaan kannasta tietue, jossa ovat samat
        $ok = tarkistaLogin($username,$password);
        if($ok) {
            $username = haeId($username);
            $id = $kayttaja[0]["userid"];
            $ip = $_SERVER["REMOTE_ADDR"];

            $_SESSION["userid"] = $id;
            $_SESSION["ip"] = $ip;

            $usernames = getAllUsers();
            require "./views/admin.view.php";
        } else {
            $message ="Käyttäjää ei löydy";
            require "./views/loginview.php";
        }
    }
}