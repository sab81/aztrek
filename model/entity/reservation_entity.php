<?php

function getAllReservationByDepart(int $id): array {
    global $connexion;

    $query = "SELECT
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.photo,
                reservation.date_creation,
                reservation.validation,
                reservation.utilisateur_id
            FROM reservation
            INNER JOIN utilisateur
                    ON utilisateur.id = reservation.utilisateur_id
            WHERE reservation.depart_id = :id
            ORDER BY reservation.nombre_de_place DESC;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}



function getAllReservationByUtilisateur(int $id): array {
    global $connexion;

 $query = "SELECT 
sejour.titre,
sejour.image,
reservation.nombre_de_reservation,
reservation.validation,
reservation.depart_id
FROM rservation
INNER JOIN sejour
	on sejour.id = depart.sejour_id
 WHERE reservation.utilisateur_id = :id 
 ORDER BY reservation.nombre_de_place DESC;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertReservation(int $nombre_de_place, int $depart_id, int $utilisateur_id): int {
    /* @var $connexion PDO */   
    global $connexion;
    
   $query = "INSERT INTO reservation (nombre_de_place, validation, depart_id, utilisateur_id) VALUES (:nombre_de_place, 0, :depart_id, :utilisateur_id);";
   
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nombre_de_place", $nombre_de_place);
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}
    
