<div id="grid" class="row-fluid">

    <span>Filter :</span>
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
      $displayCups = afficherCups();
      foreach ($displayCups as $cup)
      { ?>
        <div class="row">
            <div class="col-md-4">
  

        <div class="ecocups"><!--Case ecocup-->
          <div><!--Description ecocup-->
            <div><!--Image-->
                <img src="vue/img/ecocups/<?php echo $cup['photo']; ?>"/>
            </div>
            <p>nom : <?php echo $cup['nom']; ?> </p>
            <p>Semectre : <?php echo $cup['semestre']; ?> </p>
              <p>Description : <?php echo $cup['info']; ?> </p>
              <p>tirage : <?php echo $cup['nbtirage']; ?> </p>
          </div>
          <div><!--Boutons-->
<<<<<<< HEAD
            
=======
              <?php if($cup['appartenance'] === 1) { ?> <button type="button" class="jAiDeja">Je l'ai déjà !</button>
              <?php } ?>
              <?php if($cup['veux'] === 1) { ?>   <button type="button" class="jeVeux">Je veux !</button>
              <?php } ?>
              <?php if($cup['cede'] === 1) { ?>   <button type="button" class="jeVeux">Je la cede !</button>
              <?php } ?>
            <button type="button" class="jeVeux">Je veux !</button>
>>>>>>> 757367ba3a61b46d0ac21e147946fd881a6930b4
          </div>

        </div>
        <button type="button" class="jAiDeja">Je l'ai déjà !</button>
            <button type="button" class="jeVeux">Je veux !  <span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
    <?php
        $i++;
      }
    ?>
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
