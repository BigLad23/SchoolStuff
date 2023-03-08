<?php
if (isset($_POST["nimi"])) {
    $myXML = "yhteystiedot.xml";
    $fh = fopen($myXML, 'w') or die("cant open");
    fwrite($fh, "<=xml version='1.0' encoding='UTF-8'?>\n");
    fwrite($fh, "<tiedot>\n");
    fwrite($fh, "<nimi>", $_POST["nimi"] . "</nimi>\n");
    fwrite($fh, "</tiedot>\n");
}
?>
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("yhteystiedot.xml");
$x = $xmlDoc->documentElement;
// haetaan tiedot
$nimet = $x->getElementsByTagName( "nimi" );
$nimi = $nimet->item(0)->nodeValue;
$lahiosoitteet = $x->getElementsByTagName( "lahiosoite" );
$lahiosoite = $lahiosoitteet->item(0)->nodeValue;
$postinumerot = $x->getElementsByTagName( "postinumero" );
$postinumero = $postinumerot->item(0)->nodeValue;
$postiosoiteet = $x->getElementsByTagName( "postiosoite" );
$postiosoite = $postiosoiteet->item(0)->nodeValue;
?>

<form name="tiedot" action="" method="post">
    <label for="nimi">Nimi</label> <br />
    <input type='text' value='<?$nimi?>' /><br />
</form>