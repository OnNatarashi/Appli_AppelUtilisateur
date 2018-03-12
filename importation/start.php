<?php
$mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->query("TRUNCATE nageurs");

if (($handle = fopen("../nageurs01.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    	var_dump($data);
    	$mysqli->query("INSERT INTO nageurs (id, nom, prenom, date_naissance, adresse, appel_urgence, sexe, groupe, cours) VALUES ('".utf8_encode($data[0])."','".utf8_encode($data[1])."','".utf8_encode($data[2])."','".utf8_encode($data[3])."','".utf8_encode($data[4])."','".utf8_encode($data[5])."','".utf8_encode($data[6])."','".utf8_encode($data[7])."','".utf8_encode($data[8])."')");
    }
    fclose($handle);
}	
?>