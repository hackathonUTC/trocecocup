<?php

$user = $_SESSION['user'];
if($user = "lceccare" || $user = "rjolliet" || $user = "baheuxvi"){
	?>
	<div id="ajout">
		<a href="<?php echo $accessPath.'index.php?section=admin_ajout'; ?>">Ajouter une &eacute;cocup</a>
	</div>
	<?php
} 

?>