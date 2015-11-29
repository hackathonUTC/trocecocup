<?php

function listetypee($log, $type){
	global $mysqli;
	$query = "SELECT DISTINCT Cup.cup 
			  FROM Cup
			  LEFT JOIN liste_cup on liste_cup.cup = Cup.cup
			  LEFT JOIN liste_user on liste_user.liste = liste_cup.liste
			  WHERE liste_user.login = $log
			  AND liste_user.type = $type";

	if ($result = mysqli_query($mysqli, $query)) {
		return $result;
	}
	else return null;
}

function majouter_liste($log, $cup, $liste, $type){
	global $mysqli;
	$queryuser = "INSERT INTO `liste_user`(`liste`, `login`, `type`, `etat`) VALUES ($liste, '$log', '$type', 0)";
	$querycup = "INSERT INTO `liste_cup`(`liste`, `cup`) VALUES ($liste, $cup)";

	if($resultuser = mysqli_query($mysqli, $queryuser) && $resultcup = mysqli_query($mysqli, $querycup))
		return 1;
	else return 0;
}

?>