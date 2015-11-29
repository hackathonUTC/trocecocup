<?php
  $nomProjet = 'SwitchCup';
  include_once "../config.php";
  include_once "../class/CONF.class.php";
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ma collection</title>

    <!-- Bootstrap -->
    <link href="<?php echo $_CONF['$accessPath'] .'bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
  </head>
  <body>

    <?php
      $navbar = 'collection';
      include('nav.php');
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
