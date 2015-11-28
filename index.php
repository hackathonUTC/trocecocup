<?php
  session_save_path('session');
  session_start();

  if (!isset($_SESSION['$user'])) //Si les infos user sont OK, on affiche la page
  {
    include ('view/index.php');
  }
  else
  {
    //Connexion CAS
  }
?>
