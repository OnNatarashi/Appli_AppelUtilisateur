<?php
    $mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $id=$_GET["id"];

    $mysqli->query("DELETE FROM `nageurs` WHERE id=".$id);
    include ($_SERVER["DOCUMENT_ROOT"] . '/Appli_AppelUtilisateur/templates/layout.html') 
?>
<head>
     <link rel="stylesheet" href="../../assets/CSS/style.css">
</head>
<body>
    <div id="corps">
        <div id="intro">
            <img src="../../assets/IMG/eaht.gif" alt="Logo" /><H1>LAC GV NATATION</H1>
            <H2>Application AppelUtilisateur - Suppression</H2></br>
            <H3>Nageur Supprimé !</H3>
        </div>
        <a href="../controller.php"><button><span class="glyphicon glyphicon-backward"></span></button></a>
    </div>
</body>
