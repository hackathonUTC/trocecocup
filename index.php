<?php

include_once('modele/core/connexion_sql.php');

if ( isset($_GET['section']) AND $_GET['section'] == 'test')
{
    include_once('controleur/core/test.php');
}

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/core/index.php');
}