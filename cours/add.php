<?php 
    include ($_SERVER["DOCUMENT_ROOT"] . '/Appli_AppelUtilisateur/templates/layout.html');
    $mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $id = $_GET["id"];
    $date= $_GET["date"];
    $res = $mysqli->query("SELECT * FROM nageurs WHERE id=".$id);
    if (!$res) {
        die("Ce nageur n'exsite pas ".$id);
    }
    $row = $res->fetch_object();

    if ($row->cours == "P"){
        $cou = $mysqli->query("SELECT * FROM cours WHERE date='".$date."' AND type='P'");
        $pre = $cou->fetch_object();
    }
    else {
        $cou = $mysqli->query("SELECT * FROM cours WHERE date='".$date."' AND type='D'");
        $pre = $cou->fetch_object();
    }

    $som = $mysqli->query("INSERT INTO presence (present, cours_id, nageurs_id) VALUES ('1','$pre->id','$row->id')");
    header('Location: create_cours.php?date='.$date);
    exit();
?>