<?php

function insertPays(string $libelle, $descriptif, $image): int {
    global $connexion;
    
    /* @var $connexion PDO */
    
    /** pour l'autocompletion */
    
    $query = "INSERT INTO pays (libelle, descriptif, image) VALUES (:libelle, :descriptif, :image)";
    
    
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":descriptif", $descriptif);
    $stmt->bindParam(":image", $image);
    $stmt->execute();

    return $connexion->lastInsertId();
    
}

function updatePays(int $id, string $libelle, string $descriptif, string $image) {
    global $connexion;
    
    /* @var $connexion PDO */
    
    /** pour l'autocompletion */
    
    $query = "UPDATE pays 
            SET libelle = :libelle,
                descriptif = :descriptif,
                image =:image
            WHERE ID = :id
            ";
    
    
    /** bindParam permet de joindre les parametres*/
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":descriptif", $descriptif);
    $stmt->bindParam(":image", $image);
    $stmt->execute();

    return $connexion->lastInsertId();
    
}
