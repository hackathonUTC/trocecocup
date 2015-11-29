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
	afficherCups();
	?>

</div>
