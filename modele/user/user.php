<?php

function mnouvel_user($login, $nom, $prenom, $localisation){
	global $mysqli;
	$query = "INSERT INTO `user`(`login`, `nom`, `prenom`, `localisation`) 
	VALUES ($login, $nom, $prenom, $localisation)";

	if ($result = mysqli_query($mysqli, $query)) {
		return 1;
	}
	else return 0;
}

?>