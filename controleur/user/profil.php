<?php

include("controleur/user/user.php");

$login = $_SESSION['user'];

$user = mafficher($login);
var_dump($user);


include("vue/profil/profil.php");

?>