<?php

include_once('modele/core/connexion_sql.php');
require_once('controleur/core/cas.php');
include_once ('config.php');
session_start();

if (isset($_SESSION['user'])) //Si les infos user sont OK, on affiche la page
{
    include ('vue/core/index.php');
}
else
{
    $cas = new Cas("https://cas.utc.fr/cas/", "http://localhost/trocecocup");
    $user = $cas->authenticate();
    if ($user == -1) //Si pas de ticket ou pas de userdata, on redirige vers le CAS
    {
        $cas->login();
    } else //Sinon on récupère les infos de l'utilisateur et on recharge la page
    {
        $_SESSION['user'] = $user;
        unset($_GET['ticket']);
    }
}

if ( isset($_GET['section']) AND $_GET['section'] == 'test')
{
    include_once('controleur/core/test.php');
}

if ( isset($_GET['section']) AND $_GET['section'] == 'logout')
{
    include_once('controleur/core/logout.php');
}

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/core/index.php');
}