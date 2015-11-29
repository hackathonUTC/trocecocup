<?php

include("modele/user/user.php");

function nouvel_user($login, $nom, $prenom, $localisation){
	$result = mnouvel_user($login, $nom, $prenom, $localisation);
	return $result;
}

function existe($login){
	$result = mexiste($login);
	return $result;
}

?>