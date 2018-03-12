<?php $mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
	$date= $_GET['date'];
	if ($mysqli->connect_errno) {
	    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$res = $mysqli->query("SELECT DISTINCT date  FROM cours");
	$nag = $mysqli->query("SELECT n.id,n.nom,n.prenom FROM nageurs n LEFT JOIN presence p ON p.nageurs_id = n.id WHERE p.present IS NULL");





	$pre_d = $mysqli->query("SELECT * FROM presence p JOIN cours c ON p.cours_id = c.id JOIN nageurs n ON p.nageurs_id = n.id WHERE c.type='D' AND c.date='".$date."'");
	$pre_p = $mysqli->query("SELECT * FROM presence p JOIN cours c ON p.cours_id = c.id JOIN nageurs n ON p.nageurs_id = n.id WHERE c.type='P' AND c.date='".$date."'");




	include ($_SERVER["DOCUMENT_ROOT"] . '/Appli_AppelUtilisateur/templates/layout.html') 
?>
<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <title>AppelUtilisateur</title>
	  <link rel="stylesheet" href="../assets/css/style.css">
	</head>
	
	<body>
		<div id="corps">
			<div id="intro">
				<img src="../assets/img/eaht.gif" alt="Logo" /><H1>LAC GV NATATION</H1>
				<H2>Application AppelUtilisateur - Créer Cours</H2>
				<select id="date">
					<?php while ($row = $res->fetch_object()): ?>
						<?php if($date == $row->date) $selected="selected"; else $selected=null; ?>
				  		<option value="<?php echo $row->date ?>" <?php echo $selected ?>><?php echo $row->date ?></option>
				 	<?php endwhile; ?>
				</select>
				<div id="fiche">
					<div id="present_P">
						<h3> Présent Cours D :</h3>
						<?php while ($row=$pre_d->fetch_object()): ?>
							<p><?php echo $row->nom." ".$row->prenom ?></p>
						<?php endwhile; ?>
					</div>
					<div id="present_D">
						<h3> Présent Cours P :</h3>
						<?php while ($row=$pre_p->fetch_object()): ?>
							<p><?php echo $row->nom." ".$row->prenom ?></p>
						<?php endwhile; ?>
					</div>
					<div id="nageurs">
						<h3> Nageurs :</h3>
						<div id="nageurs_liste">
							<?php while ($nab = $nag->fetch_object()): ?>
								<a class="link_nageurs" href="add.php?id=<?php echo $nab->id ?>" data_url="<?php echo "add.php?id=".$nab->id ?>"><?php echo $nab->nom." ".$nab->prenom ?></a></br>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			<a href= '#'><button><span class="glyphicon glyphicon-backward"></span></button></a>
			</div>
		</div>
		<script>
			var date = "<?php echo $date ?>";
			$(".link_nageurs").each(function() {
				$(this).attr("href",$(this).attr("data_url")+"&date="+date);

			})
			$("#date").change(function() {
				var date = $(this).val();
				$(".link_nageurs").each(function() {
					$(this).attr("href",$(this).attr("data_url")+"&date="+date);

				})
			})
		</script>
	</body>
</html>