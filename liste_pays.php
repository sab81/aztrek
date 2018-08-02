<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$liste_pays = getAllEntities("pays");
$liste_sejours = getAllEntities("sejour");

get_header("liste des pays")
?>

<section class="container grid">
    <?php foreach ($liste_pays as $pays) : ?>
        <article>
            <h2><?php echo $pays["libelle"] ?></h2>
            <a href="pays.php?id=<?php echo $pays["id"] ?>"><img src="uploads/<?php echo ($pays["image"]) ?>" alt=""></a>
            
        </article>
    <?php endforeach; ?>
</section>





<?php get_footer(); ?>;
