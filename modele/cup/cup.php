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


?>