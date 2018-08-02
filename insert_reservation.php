<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// utilisateur connecté

$utilisateur = current_user();

$nombre_de_place = $_POST["nombre_de_place"];
$depart_id = $_POST["depart_id"];
$sejour_id = $_POST["sejour_id"];
$utilisateur_id = $utilisateur["id"];

insertReservation($nombre_de_place, $depart_id, $utilisateur_id);

header("Location: sejour.php?id=" . $sejour_id);