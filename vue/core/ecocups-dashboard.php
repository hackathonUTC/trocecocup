<div id="grid" class=" container row-fluid">

    <span class="cat">FILTRES'</span>
    <div class="dropdown sort-options">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Asso
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <?php
            afficherAsso();
            ?>
        </ul>
    </div>
    <br/><br/><br/>


    <div class="cat">
        ECO-CUPS'
    </div>

    <?php
      $i = 0;
      $displayCups = afficherCups(); ?>
      <div class="row">
      <?php foreach ($displayCups as $cup)
      {?>
        <div class="col-md-4">
          <div class="ecocups"><!--Case ecocup-->
              <div class="img_ecocup"><!--Image-->
                  <img src="vue/img/ecocups/<?php echo $cup['photo']; ?>"/>
              </div>
                <p><strong>Nom</strong>: <?php echo $cup['nom']; ?> </p>
                <p><strong>Semestre</strong> : <?php echo $cup['semestre']; ?> </p>
                <p><strong>Description</strong> : <?php echo $cup['info']; ?> </p>
                <p><strong>Tirage</strong> : <?php echo $cup['nbtirage']; ?> </p>
          </div>
          <div><!--Boutons-->
                <?php if($cup['appartenance'] === 0) { ?> <button type="button" class="jAiDeja">Je l'ai déjà !</button>
                <?php } ?>
                <?php if($cup['veux'] === 0) { ?>   <button type="button" class="jeVeux">Je veux !</button>
                <?php } ?>
                <?php if($cup['cede'] === 1) { ?>   <button type="button" class="jeVeux">Je la cede !</button>
                <?php } ?>
          </div>


        </div>    <?php
        $i++;
      }
    ?>
    </div>

    <!--
    afficherCups() envoie un tableau de type $tab[0...nbcup][champ]
    les champs sont : id, nom, asso, semestre, photo (le chemin sera pas complet)
    info, tirage, appartenance : 0 si péon l'a pas, sinon 1
    cede : 0 si péon la vend pas sinon 1
    veux : 0 si péon la veut pas sinon 1
    -->

</div>
