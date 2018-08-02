<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$liste_sejours = getAllEntities("sejour");

get_header("liste des sejours")
?>

<section class="container grid">
    <?php foreach ($liste_sejour as $sejour) : ?>
        <article>
            <h2><?php echo $sejour["libelle"] ?></h2>
            <a href="sejours.php?id"><img src="uploads/<?php echo ($sejour["image"]) ?>" alt=""></a>
        </article>
    <?php endforeach; ?>
</section>



<?php get_footer(); ?>;
