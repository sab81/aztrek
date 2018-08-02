<article class="action">
    <a href="pays.php?id=<?php echo $pays["id"]; ?>">
        <img src="uploads/<?php echo $pays["image"]; ?>" alt="<?php echo $pays["titre"]; ?>">
        <footer class="overlay">
            <div class="info">
              <div class="tag"><?php echo $pays["duree"]; ?>jours</div>
                <?php /* if ($project["nb_days"] <= 30) : ?>
                    <div class="tag blue">Nouveau !</div>
                <?php endif; */ ?>
             
                <h3><?php echo $pays["titre"]; ?></h3>
            </div>
            <div class="more-info">
                <div class="action-info">
                    <?php echo $pays["descriptif"]; ?>
                </div>
                <div class="action-info">
                    <i class="fa fa-heart"></i>
                    <?php echo $pays["coup_de_coeur"]; ?>
                </div>
                <div class="action-info">
                    <i class="fa fa-info"></i>
                    <?php echo $pays["description_longue"]; ?>
                </div>
            </div>
        </footer>
    </a>
</article>
