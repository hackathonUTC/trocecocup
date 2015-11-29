<div class="row-fluid">

    <div class="tri">
    <div class="cat">FILTRES'</div>
    <div class="">
        <button class="btn filter-options btn-default active" data-group="all"> all </button>
        <?php
        $assos = afficherAsso();
        foreach($assos as $asso) {
            ?>
            <button class="btn filter-options btn-default" data-group="<?php echo $asso; ?>"> <?php echo $asso; ?> </button>
            <?php
        }
        ?>
    </div>
</div>
    
  
    <div class="cat">
        ECO-CUPS'
    </div>

    <?php
      $i = 0;
      $displayCups = afficherCups(); ?>
      <div id="grid" class="row shuffle">
        <?php foreach ($displayCups as $cup)
        { ?>
          <div class="col-md-4 shuffle-item" data-groups='<?php echo "[\"all\", \"" . $cup["asso"] . "\"]"; ?>'>
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
          </div>

            <?php
            $i++;
             }
            ?>
          <!-- sizer -->
          <div class="col-xs-6 col-sm-4 col-md-3 shuffle_sizer"></div>
      </div>
        </div>

    <!--
    afficherCups() envoie un tableau de type $tab[0...nbcup][champ]
    les champs sont : id, nom, asso, semestre, photo (le chemin sera pas complet)
    info, tirage, appartenance : 0 si péon l'a pas, sinon 1
    cede : 0 si péon la vend pas sinon 1
    veux : 0 si péon la veut pas sinon 1
    -->

</div>
