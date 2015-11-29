<?php

include("modele/cup/cup.php");

$nom = utf8_d($_POST["nom"]); 
$asso = utf8_d($_POST["asso"]);
$semestre = utf8_d($_POST["semestre"]);
$photo = utf8_d($_POST["photo"]);
$info = utf8_d($_POST["info"]);
$nbtirage = utf8_d($_POST["tirage"]);

$result = mnouvelle_cup($nom, $asso, $semestre, $photo, $info, $nbtirage);

echo $result;

?>