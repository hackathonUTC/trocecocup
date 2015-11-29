<?php

if (!isset($_SESSION['user'])) //Si les infos user sont OK, on affiche la page
{
    $cas = new Cas("https://cas.utc.fr/cas/", $accessPath );
    $user = $cas->authenticate();
    if ($user == -1) //Si pas de ticket ou pas de userdata, on redirige vers le CAS
    {
        $cas->login();
    } else //Sinon on récupère les infos de l'utilisateur et on recharge la page
    {
        $user['user'];
        $_SESSION['user'] = $user['user'];

        include("modele/user/user.php");
        if(!mexiste($user['user'])){
            $nom = $user['nom'];
            $prenom = $user['prenom'];
            $mail = $user['mail'];
            mnouvel_user($user['user'], $nom, $prenom, $mail, "");
        }


        unset($_GET['ticket']);
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url = strtok($url, '?');
        header("Location: " . $url );
    }
}