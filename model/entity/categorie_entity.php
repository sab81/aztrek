<?php

function insertCategorie(string $libelle): int {
    global $connexion;
    
    /* @var $connexion PDO */
    
    /** pour l'autocompletion */
    
    $query = "INSERT INTO categorie (libelle) VALUES (:libelle)";
    
    
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();

    return $connexion->lastInsertId();
    
}

function updateCategorie(int $id, string $libelle) {
    global $connexion;
    
    /* @var $connexion PDO */
    
    /** pour l'autocompletion */
    
    $query = "UPDATE categorie SET libelle = :libelle WHERE ID = :id";
    
    
    /** bindParam permet de joindre les parametres*/
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();

    return $connexion->lastInsertId();
    
}
