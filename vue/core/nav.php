<?php require_once('controleur/core/CONF.class.php'); ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="./includes/img/logo.png" alt="Logo Switch Cup" />
      </a>
    </div>

    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li <?php CONF::activeLink($navbar, 'catalogue'); ?>><a href="<?php echo $accessPath; ?>">Catalogue</a></li>
        <li <?php CONF::activeLink($navbar, 'collection'); ?>><a href="<?php echo $accessPath.'index.php?section=collection'; ?>">Collection</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
