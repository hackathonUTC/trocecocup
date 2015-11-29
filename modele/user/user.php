<?php

function mnouvel_user($login, $nom, $prenom, $mail, $localisation){
	global $mysqli;
	$query = "INSERT INTO `user`(`login`, `nom`, `prenom`, `mail`, `localisation`) 
	VALUES ('$login', '$nom', '$prenom', '$mail', '$localisation')";

	if ($result = mysqli_query($mysqli, $query)) {
		return 1;
	}
	else return 0;
}

function mexiste($login){
	global $mysqli;
	$query = "SELECT nom FROM user WHERE user.login = '$login'";
	if ($result = mysqli_query($mysqli, $query)) {
		if(mysql_num_rows($result) == 1)
			return 1;
		else return 0;
	}
	else return 0;
}

function mafficher($login){
	global $mysqli;
	$query = "SELECT * FROM user WHERE user.login = '$login'";
	if ($result = mysqli_query($mysqli, $query)) {
		if(mysql_num_rows($result) == 1)
			return $result;
		else return 0;
	}
	else return 0;
}

?>