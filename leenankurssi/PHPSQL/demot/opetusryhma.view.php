<html>
<head>
<title>Oliodemo</title>
</head>
<body>

<h1>Ryhmä <?=$ryhma;?></h1>
<h2>Opiskelijaluettelo</h2>
<?php
foreach($opiskelijat as $opiskelija)
{
    echo $opiskelija."<br>";
}
?>
</body>
</html>