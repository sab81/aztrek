<?php
require_once '../../security.php';
require_once '../../../model/database.php';


// recuperation des données du formulaire
$date_debut = $_POST["date_debut"];
$prix = $_POST["prix"];
$nombre_de_place = $_POST["nombre_de_place"];
$pays_id = $_POST["pays_id"];



// Enregistrement en base de données
insertDepart($date_debut, $prix, $nombre_de_place, $pays_id);



// Redirection vers la liste
header("location: index.php");
