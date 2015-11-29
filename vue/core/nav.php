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
        <img src="./includes/img/Logo.png" alt="Logo Switch Cup" />
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (!isset($_GET['section']) OR $_GET['section'] == 'index')
          {
        ?>
            <li><a href="../navbar/">Inscription</a></li>
            <li><a class="inscription" href="<?php echo $accessPath . "?section=login"; ?>" role="button" style="color:#8EDE93;height:40px;">Connexion CAS</a></li>
        <?php
          }
          else
          {
          ?>
            <li <?php CONF::activeLink($navbar, 'catalogue'); ?>><a href="<?php echo $accessPath; ?>">Catalogue</a></li>
            <li <?php CONF::activeLink($navbar, 'collection'); ?>><a href="<?php echo $accessPath.'index.php?section=collection'; ?>">Collection</a></li>
          <?php
          }
          ?>
      </ul>
    </div><!--/.nav-collapse -->
    </div>
</nav>