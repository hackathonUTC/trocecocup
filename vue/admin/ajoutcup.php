<?php

$user = $_SESSION['user'];
if($user = "lceccare" || $user = "rjolliet" || $user = "baheuxvi"){
?>
<div>
	<form method="post">
		<ul>
			<li>
				<label>Nom</label>
				<input type="text" id="nom" class="field-long" required />
			</li>
			<li>
				<label>Association</label>
				<input type="text" id="asso" required />
			</li>
			<li>
				<label>Semestre</label>
				<input type="text" id="semestre" required />
			</li>
			<li>
				<label>Photo</label>
				<input type="text" id="photo" required />
			</li>
			<li>
				<label>Info</label>
				<input type="text" id="info" required />
			</li>
			<li>
				<label>Nombre de tirages</label>
				<input type="text" id="tirage" required />
			</li>
			<li>
				<input type="button" value="Envoi" 
				onclick="inserer_cup($('#nom').val(),$('#asso').val(), $('#semestre').val(), $('#photo').val(), $('#info').val(), $('#tirage').val())" />
			</li>
		</ul>
	</form>
</div>
<?php
}
?>
<script src="includes/noty/js/noty/jquery.noty.js"></script>

<script>
$(document).ready(function () {

  function inserer_cup(nom, asso, semestre, photo, info, tirage){
	$.ajax({
		type: 'POST',
		processData: true,
		url: "controleur/admin/update_ajoutcup.php",
		dataType: 'html',
		data: {nom:nom, asso:asso, semestre:semestre, photo:photo, info:info, tirage:tirage},
		success: function(msg){
			var mess = "Insertion effectuee";
			var typ = "success";
			if(msg == 0){
			 	mess = "Erreur d'insertion";
				typ = "warning";
			}
			noty({text:mess, type:typ, timeout:1000,
				callback: {
					afterClose: function(){location.href="<?php echo $accessPath.'index.php?section=admin'; ?>";}
				}});
		}
	});
	}

});

</script>