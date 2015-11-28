<?php
  session_save_path('session');
  session_start();

  require_once('class/CAS.class.php');

  if (isset($_SESSION['$user'])) //Si les infos user sont OK, on affiche la page
  {
    include ('view/index.php');
  }
  else
  {
    $user = CAS::auth();

    if ($user == -1) //Si pas de ticket ou pas de userdata, on redirige vers le CAS
    {
      CAS::login();
    }
    else //Sinon on récupère les infos de l'utilisateur et on recharge la page
    {
      $_SESSION['user'] = $user;
  		$_SESSION['ticket'] = $_GET['ticket'];
      //header('Location: ./'); //On recharge la page une fois l'utilisateur identifié
    }
  }
?>
