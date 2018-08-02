<?php
require_once '../../security.php';
require_once '../../../model/database.php';


// recuperation des données du formulaire
$titre = $_POST["titre"];
$description_courte = $_POST["description_courte"];
$coup_de_coeur = $_POST["coup_de_coeur"];
$image = $_POST["image"];
$description_longue = $_POST["description_longue"];
$duree = $_POST["duree"];
$pays_id = $_POST["pays_id"];

// upload de l'image
$image = $_FILES["image"] ["name"];
$tmp = $_FILES["image"] ["tmp_name"];

move_uploaded_file($tmp,"../../../uploads/" . $image);


// Enregistrement en base de données
insertSejour($titre, $image, $description_courte, $coup_de_coeur, $description_longue, $duree, $pays_id);



// Redirection vers la liste
header("location: index.php");
