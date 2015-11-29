<?php

include("modele/cup/cup.php");
if(isset($_POST["nom"])){
	$nom = $_POST["nom"]; 
	$asso = $_POST["asso"];
	$semestre = $_POST["semestre"];
	$photo = $_POST["photo"];
	$info = $_POST["info"];
	$nbtirage = $_POST["tirage"];


	$result = mnouvelle_cup($nom, $asso, $semestre, $photo, $info, $nbtirage);

	echo $result;
}
?>