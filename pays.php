<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET ["id"];
$pays = getOneEntity("pays", $id);
$sejour = getSejour($id);
$liste_sejours = getAllSejoursByPays($id);

get_header($pays ["libelle"]);
?>

<section class="pays container" >
    <h1><?php echo $pays["libelle"]; ?></h1>

    <img src="uploads/<?php echo ($pays["image"]); ?>" alt="">
    <p> <?php echo ($pays["descriptif"]); ?></p>
    <article class="container grid">
        <?php foreach ($liste_sejours as $sejour) : ?>
            <?php include 'include/sejour_inc.php'; ?>
        <?php endforeach; ?>
    </article>


</section>



<?php get_footer(); ?>;



