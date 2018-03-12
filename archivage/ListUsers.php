<?php



?>
<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <title>AppelUtilisateur_ListeNageurs</title>
	  <link rel="stylesheet" href="CSS/style.css">
	</head>
	
	<body>
		<div id="corps">
			<div id="intro">
				<img src="IMG/eaht.gif" alt="Logo" /><H1>LAC GV NATATION</H1>
				<H2>Application AppelUtilisateur - Liste des Nageurs</H2>
<?php
$mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "<h2>Nageurs:</h2>" . "\n";
echo "<table>";
echo "<tr>";
echo "<th> Nom </th>";
echo "<th> Prenom </th>";
echo "<th> Date de naissance </th>";
echo "<th> Adresse </th>";
echo "<th> Mail </th>";
echo "<th> Appel d'Urgence </th>";
echo "<th> Groupe </th>";
echo "</tr>";
$res = $mysqli->query("SELECT n.id, n.nom, n.prenom, n.date_naissance, n.adresse, n.mail, n.appel_urgence, n.groupe FROM nageurs AS n ORDER BY n.groupe ASC");
while ($row = $res->fetch_object()){
	echo "<tr>";
	echo "<td>".$row->nom."</td>";
	echo "<td>".$row->prenom."</td>";
	echo "<td>".$row->date_naissance."</td>";
	echo "<td>".$row->adresse."</td>";
	echo "<td>".$row->mail."</td>";
	echo "<td>".$row->appel_urgence."</td>";
	echo "<td>".$row->groupe."</td>";
	echo "<td><a href= 'update_user.php?id=".$row->id."'><button name='Update".$row->id."'>Update</button></a></td>";
	echo "<td><a href= 'delete_user.php?id=".$row->id."'><button name='Supprimé".$row->id."'>Delete</button></a></td>";
	echo "<td><a href= 'show_user.php?id=".$row->id."'><button name='Show".$row->id."'>Show</button></a></td>";	
	echo "</tr>";
}
echo "</table>";
?>
			</div>
		<menu>
			<form action="create_user.php">
				<input type="submit" value="Créer Nageurs">
			</form></br>
		</menu>
		<menu>
			<form action="Menu.html">
				<input type="submit" value="Retour menu">
			</form></br>
		</menu>
		</div>
	</body>
</html>