<?php

	$mysqli = new mysqli("localhost", "root", '', "swift");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

	$nom = $_POST["nom"]; 
	$asso = $_POST["asso"];
	$semestre = $_POST["semestre"];
	$photo = $_POST["photo"];
	$info = $_POST["info"];
	$nbtirage = $_POST["tirage"];

	$verif = "SELECT nom FROM cup WHERE nom = '$nom' AND asso = '$asso' AND semestre = '$semestre'";
	
	if ($result = mysqli_query($mysqli, $verif)) {
		if(mysql_num_rows($result) == 1)
			$verif = 0;
		else
			$verif = 1;
	}

	if($verif == 1){
		$query = "INSERT INTO `cup`(`cup`, `asso`, `nom`, `semestre`, `photo`, `info`, `nbtirage`) 
		VALUES (null, '$asso', '$nom', '$semestre', '$photo', '$info', $nbtirage)";


		if ($result = mysqli_query($mysqli, $query)) 
			echo 1;

		else echo 0;
	}
	else echo 0;



?>