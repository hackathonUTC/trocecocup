<?php

include_once('modele/core/connexion_sql.php');
require_once('controleur/core/cas.php');
include_once ('config.php');
session_start();

if (!isset($_SESSION['user'])) //Si les infos user sont OK, on affiche la page
{
    $cas = new Cas("https://cas.utc.fr/cas/", $accessPath);
    $user = $cas->authenticate();
    if ($user == -1) //Si pas de ticket ou pas de userdata, on redirige vers le CAS
    {
        $cas->login();
    } else //Sinon on récupère les infos de l'utilisateur et on recharge la page
    {
        $_SESSION['user'] = $user;
        unset($_GET['ticket']);
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url = strtok($url, '?');
        header("Location: " . $url . "?section=accueil");
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

if ( isset($_GET['section']) AND $_GET['section'] == 'accueil')
{
    include_once('controleur/core/accueil.php');
}

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/core/index.php');
}
