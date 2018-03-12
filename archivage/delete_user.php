<?php
$mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$id=$_GET["id"];
$mysqli->query("DELETE FROM nageurs WHERE nageurs.id=".$id);
echo "<h4>User Supprimé</h4>"
//DELETE FROM `formulaire` WHERE formulaire.id=1
?>
<head>
	 <meta charset="utf-8">
	 <title>AppelUtilisateur_SuppNageur</title>
	 <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div id="corps">
		<div id="intro">
			<img src="IMG/eaht.gif" alt="Logo" /><H1>LAC GV NATATION</H1>
			<H2>Application AppelUtilisateur - Supprimée un nageur</H2></br>
			<H3>Nageurs supprimée !</H3>
		</div>
	</div>
</body>
<menu>
	<form action="ListUsers.php">
		<input type="submit" value="Retour">
	</form></br>
</menu>