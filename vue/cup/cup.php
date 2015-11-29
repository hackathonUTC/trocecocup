<?php
include('vue/core/header.php');
$navbar = 'catalogue';
include('vue/core/nav.php');
?>

<div class="container">


</div>

<?php
include('vue/core/footer.php');
?>



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

	<?php
	//var_dump(afficherCups());
	?>

	<!--
	afficherCups() envoie un tableau de type $tab[0...nbcup][champ]
	les champs sont : id, nom, asso, semestre, photo (le chemin sera pas complet)
	info, tirage, appartenance : 0 si péon l'a pas, sinon 1
	cede : 0 si péon la vend pas sinon 1
	veux : 0 si péon la veut pas sinon 1
	-->

</div>
