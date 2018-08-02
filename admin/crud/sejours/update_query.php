
<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_POST["id"];
$titre = $_POST["titre"];
$description_courte = $_POST["description_courte"];
$description_longue = $_POST["description_longue"];
$duree = $_POST["duree"];
$pays_id = $_POST["pays_id"];
$coup_de_coeur = isset($_POST["coup_de_coeur"]) ? 1 : 0;

// Upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("sejour", $id);
    $image = $sejour["image"];
} else {
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];

    move_uploaded_file($tmp, "../../../uploads/" . $image);
}

// Enregistrement en base de données
updateSejour($id, $titre, $image, $description_courte, $coup_de_coeur, $description_longue, $duree, $pays_id);

// Redirection vers la liste
header("Location: index.php");
