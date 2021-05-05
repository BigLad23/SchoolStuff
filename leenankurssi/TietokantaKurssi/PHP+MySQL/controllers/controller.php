<?php
require "./database/models/tapahtuma.php";

function indexcontroller()
{
    $tapahtumat = haeKaikkiTapahtumat();
    require "./views/index.view.php";
}
function postadd()
{
    if(isset($_POST["nimi"],$_POST["paivays"]))
    {
        $nimi = $_POST["nimi"];
        $paivays = $_POST["paivays"];
        

        $data = array($nimi,$paivays);


        if(lisaaTapahtuma($data)) {
            indexcontroller();
        }
        else {
            $message ="Tapahtuman lisääminen kantaan ei onnistu";
        }


    } else {
        $message = "Tapahtuman tiedot eivät ole kunnossa";
    }
}

function geteditcontroller()
{
    if(isset($_GET["tapahtumaID"])) {
        $id = $_GET["tapahtumaID"];
        $tapahtuma = HaeTapahtumaid($id);

        require "./views/muokkaatapahtumaa.php";
    }
    else {
        $message ="Ei tapahtuman tietoja";
        require "./views/index.view.php";
    }

}
function editcontroller()
{
    if(isset($_POST["tapahtumaID"],$_POST["nimi"],$_POST["paivays"])) {
        $id = $_POST["tapahtumaID"];
        $nimi = $_POST["nimi"];
        $paivays = $_POST["paivays"];
        

        $data = array($nimi,$paivays,$id);

        if(muokkaaTapahtumaa($data)) {
            $message = "muokkaus onnistui";
            $tapahtumat = haeKaikkiTapahtumat();
            indexcontroller();
        } else $message = "Tapahtumaa ei  muokattu";
    } else $message = "l";
            
           
    }

function deletecontroller()
{
if(isset($_GET["tapahtumaID"])) {
    $id = $_GET ["tapahtumaID"];
    $ok = poistaTapahtuma($id);
    if($ok) {
        $message = "Tapahtumaa Poistettu";
        indexcontroller();
    } else $message = "Tapahtumaa ei poistettu kannasta";
} else $message = "Tapahtumaa ei ole edes annettu";
    $tapahtumat = haeKaikkiTapahtumat();
       
}