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
	$query = "INSERT INTO `cup`(`cup`, `asso`, `nom`, `semestre`, `photo`, `info`, `nbtirage`) 
	VALUES (null, $asso, $nom, $semestre, $photo, $info, $nbtirage)";

	if ($result = mysqli_query($mysqli, $query)) {
		return 1;
	}
	else return 0;
}

?>