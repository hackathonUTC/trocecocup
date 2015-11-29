<?php
	include('vue/core/header.php');
  	$navbar = 'catalogue';
  	include('vue/core/nav.php');
?>


<?php
include('vue/core/header.php');
$navbar = 'catalogue';
include('vue/core/nav.php');
?>

<div class="container headline cataligue">
	<div class="container headline-inside catalogue-inside">
		<div class="container headline-inside catalogue-stat">
			<?php include("vue/core/stats-dashboard.php")?>
		</div>
		<div class="container headline-inside catalogue-cup">
			<?php include("vue/core/ecocups-dashboard.php")?>
		</div>
	</div>
</div>

<?php
include('vue/core/footer.php');
?>




<?php
	include('vue/core/footer.php');
?>
