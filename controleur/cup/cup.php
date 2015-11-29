<?php
include('modele/cup/cup.php');

function afficherCups(){
	$result = getAllCups();
	$ecocup =  mysqli_fetch_assoc($result);
	$appartenance = aMoi($_SESSION["user"]);
	$appartenance = mysqli_fetch_assoc($appartenance);
	$i = 0;
	
	while($row = mysqli_fetch_assoc($result)){
		$tab[$i]["id"] = $row["cup"];
		$tab[$i]["nom"] = $row["nom"];
		$tab[$i]["asso"] = $row["asso"];
		$tab[$i]["semestre"] = $row["semestre"];
		$tab[$i]["photo"] = $row["photo"];
		$tab[$i]["info"] = $row["info"];
		$tab[$i]["nbtirage"] = $row["nbtirage"];
		
		if(in_array($row["cup"]), $appartenance){
			$app = 1;
		}
		else $app = 0;

		$tab[$i]["appartenance"] = $app;

		$i++;
	}
	return $tab;
}

function afficherAsso(){
	$result = getAllAsso();
	while($row = mysqli_fetch_assoc($result)){
		$nom = $row["asso"];
		echo("<li><a href=\"#\"> $nom </a></li>");
	}
}

function affAsso(){
		$result = getAllAsso();
	while($row = mysqli_fetch_assoc($result)){
		$nom = $row["asso"];
		echo $nom;
	}
}

include("vue/cup/cup.php");

?>