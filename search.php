<?php

$search = $_GET["title"];
require_once 'lib/functions.php';

get_header("résultat de recherche")
?>

<section class="container">
    
  
      
    
    <h1>Rechercher "<?php echo $search; ?>" :</h1>
    
</section>

<?php get_footer(); ?>;


