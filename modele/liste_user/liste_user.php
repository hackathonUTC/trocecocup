<?

function creer_liste(id_liste, login, type){
	global $mysqli;
	$query = "INSERT INTO `liste_user`(`liste`, `login`, `type`) VALUES ($id_list, $login, $type)";
	if ($result = mysqli_query($mysqli, $query)) {
    	return $result;
	}
	else return null;
}

?>