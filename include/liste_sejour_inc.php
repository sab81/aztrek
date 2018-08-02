<article class="action">
    <a href="list_sejour.php?id=<?php echo $list_sejour["id"]; ?>">
        <img src="uploads/<?php echo $sejour["image"]; ?>" alt="<?php echo $sejour["titre"]; ?>">
        <footer class="overlay">
            <div class="info">
               
                <?php /* if ($project["nb_days"] <= 30) : ?>
                    <div class="tag blue">Nouveau !</div>
                <?php endif; */ ?>
             
                <h3><?php echo $sejour["titre"]; ?></h3>
            </div>
            <div class="more-info">
               
                <div class="action-info">
                    <i class="fa fa-heart"></i>
                    <?php echo $sejour["coup_de_coeur"]; ?>
                </div>
                
                <div class="action-info">
                    
                      <i class="fa fa-calendar"></i>
                    <?php echo $sejour["duree"]; ?>
                      
                      jours
                </div>
                  
                </div>
                
           
        </footer>
    </a>
</article>
