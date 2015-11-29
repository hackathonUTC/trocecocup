<?php 

function getAllCups(){
	global $mysqli;
	$query = "SELECT * FROM Cup";
	if ($result = mysqli_query($mysqli, $query)) {
		return $result;
	}
	else return null;
} 

function getAllAsso(){
	global $mysqli;
	$query = "SELECT DISTINCT asso FROM Cup";
	if ($result = mysqli_query($mysqli, $query)) {
		return $result;
	}
	else return null;
} 

function mnouvelle_cup($nom, $asso, $semestre, $photo, $info, $nbtirage){
	global $mysqli;

	// si l'écocup n'a pas déjà été rentrée, on l'insère par la suite
	$verif = "SELECT nom FROM cup WHERE nom = $nom AND asso = $asso AND semestre = $semestre";
	if ($result = mysqli_query($mysqli, $verif)) {
		if(mysql_num_rows($result) == 1)
			$verif = 0;
		else
			$verif = 1;
	}

	if($verif == 1){
		$query = "INSERT INTO `cup`(`cup`, `asso`, `nom`, `semestre`, `photo`, `info`, `nbtirage`) 
		VALUES (null, '$asso', '$nom', '$semestre', '$photo', '$info', '$nbtirage')";

		if ($result = mysqli_query($mysqli, $query)) {
			return 1;
		}
		else return 0;
	}
	else return 0;
}

?>