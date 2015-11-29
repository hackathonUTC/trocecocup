<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SwitchCup</title>

    <!-- Bootstrap -->
    <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/app.css" rel="stylesheet">
  </head>
  <body>
    <?php
      include('vue/core/nav.php');
    ?>

    <div class="headline">
      <div class="container">
        <h1>Oups !</h1>
        <p>La page que vous avez demandé n'existe pas. :(</p>

      </div>
    </div>
    <div class="box row">
      <button href="index.php" type="button" class="btn btn-default">Retour à l'accueil</button>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="includes/jquery/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="includes/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
