<?php
	$mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
	if ($mysqli->connect_errno) {
	    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$id=$_GET["id"];
	$res = $mysqli->query("SELECT enable FROM nageurs WHERE id=".$id);
	$row = $res->fetch_object();

	$enable = $row->enable;
	if ($enable == 1){
		$enable = 0;
	}
	else
	{
		$enable = 1;
	}

	$mysqli->query("UPDATE nageurs SET enable= ".$enable." WHERE id=".$id);
	include ($_SERVER["DOCUMENT_ROOT"] . '/Appli_AppelUtilisateur/templates/layout.html')
?>
<head>
	 <link rel="stylesheet" href="../../assets/CSS/style.css">
</head>
<body>
	<div id="corps">
		<div id="intro">
			<img src="../../assets/IMG/eaht.gif" alt="Logo" /><H1>LAC GV NATATION</H1>
			<H2>Application AppelUtilisateur - Désactivation</H2></br>
			<?php if($row->enable): ?>
				<H3>Nageurs désactivé !</H3>
			<?php else: ?>
				<H3>Nageurs activé !</H3>
			<?php endif ?>
		</div>
		<menu>
			<a href="../controller.php"><button><span class="glyphicon glyphicon-backward"></span></button></a>
		</menu>
	</div>
</body>
