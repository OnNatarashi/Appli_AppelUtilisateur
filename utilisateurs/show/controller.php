<?php
    $mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $id=$_GET["id"];

    $res = $mysqli->query("SELECT * FROM `nageurs` WHERE id=".$id);
    $row = $res->fetch_object();
    include ($_SERVER["DOCUMENT_ROOT"] . '/Appli_AppelUtilisateur/templates/layout.html');
?>
<head>
     <link rel="stylesheet" href="../../assets/CSS/style.css">
</head>
<body>
    <div id="corps">
        <div id="intro">
            <img src="../../assets/IMG/eaht.gif" alt="Logo" /><H1>LAC GV NATATION</H1>
            <H2>Application AppelUtilisateur - Visualisation</H2></br>
            <?php if($row->enable): ?>
                <p><img src="../../assets/img/valide.jpg" alt="" width="50px"/></p>
            <?php else: ?>
                <p><img src="../../assets/img/desactive.png" alt="" width="50px"/></p>
            <?php endif ?>
            <p>Nom: <?php echo $row->nom ?></p>
            <p>Prénom: <?php echo $row->prenom ?></p>
            <p>Date de naissance: <?php echo $row->date_naissance ?></p>
            <p>Adresse: <?php echo $row->adresse ?></p>
            <p>Sexe: <?php echo $row->sexe ?></p>
            <p>Cours: <?php echo $row->cours ?></p>
            <p>Numéro Urgence: 0<?php echo $row->appel_urgence ?></p>
            <p>Groupe: <?php echo $row->groupe ?></p>
        </div>
        <a href="../controller.php"><button><span class="glyphicon glyphicon-backward"></span></button></a>
    </div>
</body>
