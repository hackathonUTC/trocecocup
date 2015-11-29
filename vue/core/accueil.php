<?php
include('vue/core/header.php');
$navbar = 'catalogue';
include('vue/core/nav.php');
?>

<div class="container headline cataligue">
	<div class="container headline-inside catalogue-inside">
<<<<<<< HEAD
		<div class="container headline-inside catalogue-stat">
			<?php include('vue/core/stats-dashboard.php'); ?>
=======
		<div class="container catalogue-stat">
			<?php include("vue/core/stats-dashboard.php"); ?>
>>>>>>> 6eba42d92b0ec5890c0239120cb4b1bff7b40670
		</div>
		<div class="container headline-inside catalogue-cup">
			<?php include('vue/core/ecocups-dashboard.php'); ?>
		</div>
	</div>
</div>

<?php
include('vue/core/footer.php');
?>
