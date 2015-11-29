<?php

function mnouvelle_prop($liste1, $liste2, $etat, $date){
	global $mysqli;
	$query = "INSERT INTO `proposition`(`liste1`, `liste2`, `etat`, `date`) 
	VALUES ($liste1, $liste2, $etat, $date)";

	if ($result = mysqli_query($mysqli, $query)) {
		return 1;
	}
	else return 0;
}

?>