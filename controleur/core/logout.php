<?php
session_start();

require_once('controleur/core/cas.php');
unset($_SESSION['user']);
$cas = new Cas("https://cas.utc.fr/cas/", "http://localhost/trocecocup");
$cas->logout();





