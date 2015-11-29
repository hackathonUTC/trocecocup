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
      while (isset($displayCups[$i]))
      { ?>
        <div class="row">
            <div class="col-md-4">
  

        <div class="ecocups"><!--Case ecocup-->
          <div><!--Description ecocup-->
            <div><!--Image-->
              <img src="vue/img/ecocups/<?php echo $tab['photo']; ?>"/>
            </div>
            <p><?php echo $tab['nom'].' '.$tab['semestre']; ?></p>
          </div>
          <div><!--Boutons-->
            
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
