
<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$sejours = getAllSejours();


get_header("liste des Séjours")
?>

<section class="container">
    <div class="actions">
    <?php foreach ($sejours as $sejour) : ?>
            <?php include 'include/sejour_inc.php'; ?>
        <?php endforeach; ?>
        </div>
</section>

<?php get_footer(); ?>;

