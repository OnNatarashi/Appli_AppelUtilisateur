<!DOCTYPE html>
<?php include ($_SERVER["DOCUMENT_ROOT"] . '/Appli_AppelUtilisateur/templates/layout.html') ?>
<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <title>AppelUtilisateur_CreerNageur</title>
	  <link rel="stylesheet" href="../assets/css/style.css">
	</head>
	
	<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="JS/bootstrap.min.js"></script>
		<div id="corps">
			<div id="intro">
				<img src="../assets/img/eaht.gif" alt="Logo" /><H1>LAC GV NATATION</H1>
				<H2>Application AppelUtilisateur - Créer un nageur</H2>
			<form action="traitementcreateuser.php" method="POST">
				<h1>Formulaire:</h1>
				<div>
					<div class="col-md-4">Nom:</div>
					<div class="col-md-8"><input name="nom" size="20" maxlength="50"/></div>
				</div></br>
				<div>
					<div class="col-md-4">Prenom:</div>
					<div class="col-md-8"><input name="prenom" size="20" maxlength="50"/></div>
				</div></br>
				<div>
					<div class="col-md-3">Date de naissance (Format : AAAA-MM-JJ):</div>
					<div class="col-md-8"><input name="date_naissance" size="20" maxlength="50"/></div>
				</div></br>
				<div>
					<div class="col-md-3">Adresse:</div>
					<div class="col-md-8"><input name="adresse" size="20" maxlength="50"/></div>
				</div></br>
				<div>
					<div class="col-md-3">Sexe (M ou F):</div>
					<div class="col-md-8"><input name="sexe" size="20" maxlength="50"/></div>
				</div></br>
				<div>
					<div class="col-md-3">Numéro d'urgence:</div>
					<div class="col-md-8"><input name="appel_urgence" size="20" maxlength="50"/></div>
				</div></br>
				<div>
					<div class="col-md-3">Cours: (D ou P)</div>
					<div class="col-md-8"><input name="cours" size="20" maxlength="50"/></div>
				</div></br>
				<div>
					<div class="col-md-3">Groupe: (1 ou 2)</div>
					<div class="col-md-8"><input name="groupe" size="20" maxlength="50"/></div>
				</div></br>
				<button><span class="glyphicon glyphicon-saved"></span></button>
			</form></br>
			<a href= 'controller.php'><button><span class="glyphicon glyphicon-backward"></span></button></a>
			</div>
		</div>
	</body>
</html>