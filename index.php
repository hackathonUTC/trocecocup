<?php

include_once('modele/core/connexion_sql.php');
require_once('controleur/core/cas.php');
include_once ('config.php');
session_start();

if ( isset($_GET['ticket']) AND !isset($_SESSION['user']))
{
    include('controleur/core/login.php');
}

if ( isset($_GET['section']) AND $_GET['section'] == 'login')
{
    if(isset($_SESSION['user'])){
        header("Location: ./" );
    } else {
        include('controleur/core/login.php');
    }
}

if (!isset($_SESSION['user'])) {
    include_once('controleur/core/index.php');
}

else {

  if ( isset($_GET['section']) AND $_GET['section'] == 'test')
  {
    include_once('controleur/core/test.php');
  }

  if ( isset($_GET['section']) AND $_GET['section'] == 'logout')
  {
	   include_once('controleur/core/logout.php');
  }

  if ( isset($_GET['section']) AND $_GET['section'] == 'cup')
  {
    include_once('controleur/cup/cup.php');
  }

  if ( isset($_GET['section']) AND $_GET['section'] == 'collection')
  {
	  include_once('controleur/core/collection.php');
  }

  if ( !isset($_GET['section']) OR $_GET['section'] == 'accueil')
  {
    include_once('controleur/core/accueil.php');
  }
}
