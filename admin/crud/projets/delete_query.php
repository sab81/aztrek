<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];


deleteEntity("projet", $id);

header("location: index.php");


