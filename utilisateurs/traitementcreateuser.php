<?php
$mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$date_naissance=$_POST["date_naissance"];
$adresse=$_POST["adresse"];
$sexe=$_POST["sexe"];
$appel_urgence=$_POST["appel_urgence"]; 
$cours=$_POST["cours"];
$groupe=$_POST["groupe"]; 
$mysqli->query("INSERT INTO nageurs (nom, prenom, date_naissance, adresse, sexe, appel_urgence, groupe, cours) VALUES ('".$nom."','".$prenom."','".$date_naissance."','".$adresse."','".$sexe."','".$appel_urgence."','".$groupe."','".$cours."')");
//INSERT INTO `nageurs` (`id`, `nom`, `prenom`, `date_naissance`, `adresse`, `mail`, `appel_urgence`, `groupe`) VALUES (NULL, 'HECTOR', 'Rémi', '1998-07-30', '127 rue jean jaurés 80330 Longueau', 'remi.hector80@gmail.com', '0647596223', '2');
?>
<head>
	 <meta charset="utf-8">
	 <title>AppelUtilisateur_CreerNageur</title>
	 <link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body>
	<div id="corps">
		<div id="intro">
			<img src="../assets/img/eaht.gif" alt="Logo" /><H1>LAC GV NATATION</H1>
			<H2>Application AppelUtilisateur - Créer un nageur</H2></br>
			<H3>Nageurs créer !</H3>
		</div>
		<menu>
			<form action="controller.php">
				<button><span class="glyphicon glyphicon-saved"></span></button>
			</form></br>
		</menu>
	</div>
</body>
