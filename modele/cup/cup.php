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

function aMoi($log){
	global $mysqli;
	$query = "SELECT DISTINCT Cup.cup 
			  FROM Cup
			  LEFT JOIN liste_cup on liste_cup.cup = Cup.cup
			  LEFT JOIN liste_user on liste_user.liste = liste_cup.liste
			  WHERE liste_user.login = $log";
	if ($result = mysqli_query($mysqli, $query)) {
		return $result;
	}
	else return null;
}


?>