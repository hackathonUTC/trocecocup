<?php
  //session_save_path('session');

session_start();

include_once ('config.php');
include ('vue/core/index.php');
/*
require_once('CAS.class.php');

  if (isset($_SESSION['$user'])) //Si les infos user sont OK, on affiche la page
  {
      die("connecté");
      include ('vue/core/index.php');
  }
  else
  {
    $user = CAS::authenticate();

    if ($user == -1) //Si pas de ticket ou pas de userdata, on redirige vers le CAS
    {

      CAS::login();
        die("ici");
    }
    else //Sinon on récupère les infos de l'utilisateur et on recharge la page
    {
      $_SESSION['user'] = $user;
      $_SESSION['ticket'] = $_GET['ticket'];

        header('location: ./'); //On recharge la page une fois l'utilisateur identifié
    }
  }



*/