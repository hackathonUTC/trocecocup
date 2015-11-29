<?php
include_once ('config.php');
if (!isset($_SESSION['user'])) //Si les infos user sont OK, on affiche la page
{
  header("Location: ".$accessPath);
}
else
{
  include('vue/core/404.php');
}
?>
