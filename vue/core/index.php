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
      $navbar = 'catalogue';
      include('vue/core/nav.php');
    ?>

    <div class="headline">
      <div class="container">
        <h1>Switchez vos <span>eco-cups</span> facilement</h1>
        <p>Sans prise de tête ni attente..</p>
      </div>
    </div>
    <div class="box row">
        <img src="./includes/img/illustration-switch.png" alt="Illustration" />
        <h2>Facilité d’échange. Lorem Ipsum. Lorem Ipsum. </h2>
        <p>Sans prise de tête ni attente..</p><br/>

        <button type="button" class="btn btn-default">Connexion CAS</button>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="includes/jquery/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="includes/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
