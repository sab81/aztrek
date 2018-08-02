<?php
require_once 'lib/functions.php';
require_once 'model/database.php';
 if (!isset($_GET["id"])) {
    header("Location: 404.php");
}
 $id = $_GET["id"];
$utilisateur = getOneEntity("utilisateur", $id);
$list_reservations = getAllReservationsByUtilisateur($id);
 get_header($utilisateur["prenom"] . " " . $utilisateur["nom"]);
?>
 <section class="container">
    <h1><?php echo $utilisateur["prenom"] . " " . $utilisateur["nom"]; ?></h1>
    <img src="<?php echo get_avatar($utilisateur["photo"]); ?>" alt="">
    
    
     <aside class="list-users">
    <?php foreach ($list_reservations as $reservation) : ?>
    <article>
        <img src="uploads/<?php echo ($reservation["image"]); ?>" alt="">
        <div>
            <a href="sejour.php?id=<?php echo $reservation["projet_id"]; ?>"><?php echo $reservation["titre"]; ?></a>
            <em><?php echo $reservation["montant"]; ?>€</em> 
        </div>
    </article>
    <?php endforeach; ?>
    </aside>
</section>
 <?php get_footer(); ?>