<?php
require "./database/models/uutinen.php";
require "./database/models/kayttaja.php";
require "./helpers/helper.php";

function indexcontroller()
{
    $kayttajat = haeKaikkiKayttajat();
    $uutiset = haeKaikkiUutiset();
    require "./views/index.view.php";
}
function admincontroller()
{
    $kayttajat = haeKaikkiKayttajat();
    $uutiset = haeKaikkiUutiset();
    require "./views/admin.view.php";
}
function kayttajacontroller()
{
    $kayttajat = haeKaikkiKayttajat();
    require "./views/kayttajalista.view.php";
}
function postregister()
{
    if(isset($_POST["kayttajatunnus"],$_POST["salasana"]) && $_POST["salasana"]==$_POST["salasana2"])
    {
        $kayttaja = sanit($_POST["kayttajatunnus"]);
        $password = password_sanit($_POST["salasana"]);
        

        $data = array($kayttaja,$password);
        //var_dump($data);

        if(lisaaKayttaja($data)) {
            admincontroller();
        }
        else {
            $message ="Käyttäjän lisääminen kantaan ei onnistu";
            require "./views/kirjauduform.view.php";
        }


    } else {
        $message = "Lomakkeen tiedot eivät ole kunnossa";
        require "./views/kirjauduform.view.php";
    }
}
    function postlogin()
{
    if(isset($_POST["kayttajatunnus"],$_POST["salasana"])) {
        $kayttaja = sanit($_POST["kayttajatunnus"]);
        $password = trim($_POST["salasana"]);

        //haetaan kannasta tietue, jossa ovat samat
        $ok = tarkistaLogin($kayttaja,$password);
        if($ok) {
            $kayttaja = haeId($kayttaja);
            $id = $kayttaja[0]["kayttajaID"];
            $ip = $_SERVER["REMOTE_ADDR"];

            $_SESSION["kayttajaID"] = $id;
            $_SESSION["ip"] = $ip;

            $uutiset = haeKaikkiUutiset();
            $kayttajat = haeKaikkiKayttajat();
            require "./views/admin.view.php";
        } else {
            $message ="Käyttäjää ei löydy";
            require "./views/kirjauduform.view.php";
        }
    }
}
function logout()
{
    if(isset($_SESSION["ip"],$_SESSION["kayttajaID"]))
    {
        session_unset(); //poistaa kaikki istuntomuuttujat
        session_destroy(); //poistaa koko istunnon
        header("Location:./index.php");
    }
}
function editcontroller()
{
    if(isset($_GET["kayttajaID"])) {
        $id = $_GET["kayttajaID"];
        $ok = paivitaKayttaja($id);
        if($ok) {
            $message = "Käyttäjä muokattu";
        } else $message = "Käyttäjää ei  muokattu";
    } else $message = "Käyttäjää ei ole edes annettu";
            $uutiset = haeKaikkiUutiset();
            $kayttajat = haeKaikkiKayttajat();
            require "./views/admin.view.php";
    }

function deletecontroller()
{
if(isset($_GET["kayttajaID"])) {
    $id = $_GET ["kayttajaID"];
    $ok = poistaKayttaja($id);
    if($ok) {
        $message = "Käyttäjä Poistettu";
    } else $message = "Käyttäjää ei poistettu kannasta";
} else $message = "Käyttäjää ei ole edes annettu";
        $kayttajat = haeKaikkiKayttajat();
        require "./views/admin.view.php";
}

