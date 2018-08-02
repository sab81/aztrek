
<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_POST["id"];
$date_debut = $_POST["date_debut"];
$prix = $_POST["prix"];
$nombre_de_place = $_POST["nombre_de_place"];
$sejour_id = $_POST["sejour_id"];


// Enregistrement en base de données
updateDepart($id, $date_debut, $prix, $nombre_de_place, $sejour_id);

// Redirection vers la liste
header("Location: index.php");
