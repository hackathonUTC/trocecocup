<?php

include("modele/user/user.php");

function nouvel_user($login, $nom, $prenom, $mail, $localisation){
	$result = mnouvel_user($login, $nom, $prenom, $mail, $localisation);
	return $result;
}

function existe($login){
	$result = mexiste($login);
	return $result;
}

function afficher($login){
	$result = mafficher($login);
	return $result;
}
?>