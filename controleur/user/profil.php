<?php

include("controleur/user/user.php");

$login = $_SESSION['user'];

$user = afficher($login);

include("vue/profil/profil.php");

?>