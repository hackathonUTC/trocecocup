<?php
session_start();
include('modele/cup/cup.php');

function afficherCups(){
	$result = getAllCups();
	echo "<ul>";
	while($row = mysqli_fetch_assoc($result)){
		$nom = $row["nom"];
		$asso = $row["asso"];
		$semestre = $row["semestre"];
		$photo = $row["photo"];
		$info = $row["info"];
		$nbtirage = $row["nbtirage"];

		echo("<li data-groups='[\"$asso\"]'>");
		echo("Nom : $nom   -    Asso : $asso");
		echo("</li>");
	}
	echo "</ul>";
}

include("vue/cup/cup.php");

?>