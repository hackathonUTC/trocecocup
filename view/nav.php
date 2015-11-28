<?php require_once('class/CONF.class.php'); ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Afficher le menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand" href="#"><?php echo $nomProjet; ?></div>
    </div>

    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li <?php CONF::activeLink($navbar, 'catalogue'); ?>><a href="index.php">Catalogue</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
