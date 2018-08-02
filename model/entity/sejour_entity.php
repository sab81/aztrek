<?php

/**
 * Retourne la liste des sejours
 * @return array Liste des sejours
 */
function getAllSejours(int $limit = 999): array {
    global $connexion;

    $query = "SELECT
                sejour.id,
                sejour.titre,
                sejour.image,
                sejour.description_courte,
                coup_de_coeur,
                description_longue,
                duree,
                pays.libelle AS pays
                FROM sejour
                INNER JOIN pays ON pays.id = sejour.pays_id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllSejoursByPays(int $id): array {
    global $connexion;

    $query = $query = "SELECT *
                FROM sejour
                WHERE sejour.pays_id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}





function getSejour(int $id): array {
    global $connexion;

    $query = "SELECT
                sejour.id,
                sejour.titre,
                sejour.image,
                sejour.description_courte,
                sejour.duree,
                pays.libelle AS pays
            FROM sejour
            INNER JOIN pays ON sejour.pays_id = pays.id
            LEFT JOIN depart ON depart.sejour_id = sejour.id
            LEFT JOIN wishlist ON wishlist.sejour_id = sejour.id
            WHERE sejour.id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertSejour(string $titre, string $image, string $description_courte, string $coup_de_coeur, string $description_longue, int $duree, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, image, description_courte, coup_de_coeur, description_longue, duree, pays_id) VALUES (:titre, :image, :description_courte, :coup_de_coeur, :description_longue, :duree, :pays_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":coup_de_coeur", $coup_de_coeur);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateSejour(int $id, string $titre, string $image, string $description_courte, string $coup_de_coeur, string $description_longue, int $duree, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE sejour  
        SET titre = :titre, 
            image = :image, 
            description_courte = :description_courte, 
            coup_de_coeur = :coup_de_coeur, 
            description_longue = :description_longue, 
            duree = :duree, 
            pays_id = :pays_id
        WHERE id = :id
        ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":coup_de_coeur", $coup_de_coeur);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}