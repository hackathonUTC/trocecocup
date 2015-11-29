

<?php
include('vue/core/header.php');

$user = $_SESSION['user'];

if($user = "lceccare" || $user = "rjolliet" || $user = "baheuxvi"){
?>


<script>

  function inserer_cup(nom, asso, semestre, photo, info, tirage){
	$.ajax({
		type: 'POST',
		processData: true,
		url: "controleur/admin/update_ajoutcup.php",
		dataType: 'html',
		data: {nom:nom, asso:asso, semestre:semestre, photo:photo, info:info, tirage:tirage},
		success: function(msg){
			vider_champ();
		}
	});
	}

	function vider_champ(){
		$('#nom').val("Ecocup Ajoutee !");
		$('#asso').val("");
		$('#semestre').val("")
		$('#photo').val("");
		$('#info').val("");
		$('#tirage').val("");
	}

</script>

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
				onclick="inserer_cup($('#nom').val(), $('#asso').val(), $('#semestre').val(), $('#photo').val(), $('#info').val(), $('#tirage').val())" />
			</li>
		</ul>
	</form>
</div>
</body>
<?php
}
?>
