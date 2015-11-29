<?php
include('modele/cup/cup.php');

function afficherCups()
{
	include('modele/listes/listes.php');
	$user = $_SESSION["user"];
	$result = getAllCups();

	//$ecocup = mysqli_fetch_assoc($result);
	//if ($ecocup) {
	$appartenance = listetypee($user, "collection");
	if ($appartenance) {
		$appartenance = mysqli_fetch_assoc($appartenance);
	}

	$jeveux = listetypee($user, "veux");
	if ($jeveux) {
		$jeveux = mysqli_fetch_assoc($jeveux);
	}

	$jeveuxpu = listetypee($user, "cede");
	if($jeveuxpu) {
		$jeveuxpu = mysqli_fetch_assoc($jeveuxpu);
	}
	
	$i = 0;
	$tab = array();
	while($row = mysqli_fetch_assoc($result)){
		$idcup = $row["cup"];
		$tab[$i]["id"] = $idcup;
		$tab[$i]["nom"] = $row["nom"];
		$tab[$i]["asso"] = $row["asso"];
		$tab[$i]["semestre"] = $row["semestre"];
		$tab[$i]["photo"] = $row["photo"];
		$tab[$i]["info"] = $row["info"];
		if(isset($appartenance)) $tab[$i]["nbtirage"] = $row["nbtirage"]; else $tab[$i]["nbtirage"] = null;
		
		if(isset($appartenance) && array($idcup, $appartenance))  $app = 1 ; else $app = 0;
		if(isset($jeveux) && in_array($idcup, $jeveux))  $jv = 1 ; else $jv = 0;
		if(isset($jeveuxpu) && in_array($idcup, $jeveuxpu))  $jvp = 1 ; else  $jvp = 0;
		$tab[$i]["appartenance"] = $app;
		$tab[$i]["veux"] = $jv;
		$tab[$i]["cede"] = $jvp;

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

function nouvelle_cup($nom, $asso, $semestre, $photo, $info, $nbtirage){
	$result = mnouvelle_cup($nom, $asso, $semestre, $photo, $info, $nbtirage);
	return $result;
}

?>