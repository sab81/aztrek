<?php

function getAllDeparts(int $id): array {
    global $connexion;

    $query = "SELECT
                depart.id
                DATE_FORMAT(depart.date_debut, '%d/%m/%Y) AS date_debut_format,
                REPLACE(FORMAT(depart.prix, 'currency', 'de_DE'), '.', ' ') AS prix_format
                depart.nombre_de_place,
                sejour.id AS sejour
                FROM depart
                INNER JOIN sejour ON pays.id = depart.sejour_id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllDepartsBySejour(int $id): array {
    global $connexion;

    $query = "SELECT 
        depart.id,
        sejour.titre,
        sejour.image,
        depart.date_debut,
        DATE_FORMAT(depart.date_debut, '%d/%m/%Y') AS date_debut_format,
        depart.prix,
        depart.nombre_de_place
        FROM depart
        INNER JOIN sejour
            ON sejour.id = depart.sejour_id
        WHERE depart.sejour_id = :id
        ORDER BY depart.prix DESC;";
    
    // jointure à faire

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    return $stmt->fetchAll();
}


function getDepartsBySejour(int $id): array {
    global $connexion;

    $query = "SELECT *
                FROM depart
                WHERE depart.sejour_id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_debut", $date_debut);
     $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nombre_de_place", $nombre_de_place);
    $stmt->execute();

    return $stmt->fetch();
}



function insertDepart(int $id, int $date_debut, float $prix, int $nombre_de_place): int {
    global $connexion;
    
    /* @var $connexion PDO */
    
    /** pour l'autocompletion */
    
    $query = "INSERT INTO depart (date_debut, prix, nombre_de_place) VALUES  NOW(), :prix, :nombre_de_place)";
    
    
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":Nombre_de_place", $nombre_de_place);
     $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();

    return $connexion->lastInsertId();
    
}

function updateDepart(int $id, int $date_debut, float $prix, int $nombre_de_place): int {
    global $connexion;
    
    /* @var $connexion PDO */
    
    /** pour l'autocompletion */
    
    $query = "UPDATE depart
            SET id = :id, 
                date_debut = :date_debut,
                prix = :prix,
                nombre_de_place = :nombre_de_place,
                sejour_id = :sejour_id
            WHERE ID = :id
            ";
    
    
    /** bindParam permet de joindre les parametres*/
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nombre_de_place", $nombre_de_place);
    $stmt->bindParam(":sejour_id", $sejour_id);
    
    $stmt->execute();

    return $connexion->lastInsertId();
    
}
