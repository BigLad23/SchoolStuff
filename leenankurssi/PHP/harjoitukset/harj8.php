<h1>8.1</h1>
<?php
$date = date('h:i:s', time()); 
$date1 = date('Y/m/d', time());
$date2 = date('D', time());
echo $date. "<br>";
echo $date1. "<br>";
echo $date2. "<br>";
?>
<h1>8.2</h1>
<?php
echo date('d/m/Y h:i:s');
?>
<h1>8.3</h1>
<?php
function palautaPvm()
{
    $aika = date('d.m.Y');
    return $aika;
}
echo  palautaPvm()."<br>";
$paivia = palautaPvm();
?>