
<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$libelle = $_POST["libelle"];
$descriptif = $_POST["descriptif"];

if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $pays = getOneEntity("pays", $id);
    $image = $pays["image"];
} else {
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];

    move_uploaded_file($tmp, "../../../uploads/" . $image);
}


updatePays($id, $libelle, $descriptif, $image);

header("location: index.php");

