<?php

require "opiskelija.php";
require "opetusryhma.php";

$opetusryhma = new Opetusryhma('TiViDO',2019);
$opetusryhma->lisaa(new Opiskelija("Jaakko", "jaakko@netti.fi"));
$opetusryhma->lisaa(new Opiskelija("Jorma", "jorma@gmail.com"));
$opetusryhma->lisaa(new Opiskelija("Jaana", "jaana67@gmail.com"));
$ryhma = $opetusryhma->haeRyhmannimi();
$opiskelijat = $opetusryhma->nimilista();

require 'opetusryhma.view.php';
?>