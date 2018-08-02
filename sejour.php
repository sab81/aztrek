<?php
require_once 'lib/functions.php';
require_once 'model/database.php';


if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getSejour($id);
//$list_reservations = getAllReservationsBySejour($id);
$liste_depart = getAlldepartsBySejour($id);

$utilisateur = current_user();

get_header($sejour["titre"]);
?>

<section class="container">
    <h1><?php echo $sejour["titre"]; ?></h1>
    <img src="uploads/<?php echo ($sejour["image"]); ?>" alt="">

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Date</th>
                <th>Nombre de place</th>
                <th>Prix</th>
                <th>Réserver</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($liste_depart as $depart) :; ?>
                <tr>
                    <td><?php echo $depart["date_debut_format"]; ?></td>
        <br>
                    <td><?php echo $depart["nombre_de_place"]; ?></td>
                    <td><?php echo $depart["prix"]; ?></td>
                   
                
                    <br>
                    <td class="col-actions">
                        <?php if (!empty($utilisateur)): ?>
                            <form action="insert_reservation.php" method="POST">
                                <input type="hidden" name="depart_id" value="<?php echo $depart["id"]; ?>">
                                <input type="hidden" name="sejour_id" value="<?php echo $sejour["id"]; ?>">
                                <input type="number" name="nombre_de_place" min="1">
                             
                                <button type="submit">Je réserve</button>
                            </form>
                        <?php else: ?>
                            <a href="admin/login.php">Se connecter</a>   
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



    <article class="list-users">

    </article>

</aside>
</section>

<?php get_footer(); ?>

