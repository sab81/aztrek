<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$libelle = $_POST["libelle"];
$descriptif = $_POST["descriptif"];

$image = $_FILES["image"] ["name"];
$tmp = $_FILES["image"] ["tmp_name"];

move_uploaded_file($tmp,"../../../uploads/" . $image);


insertPays($id, $libelle, $descriptif, $image);

header("location: index.php");
