<?php 
require_once '../../../model/database.php';

$liste_sejours = getAllSejours();

require_once '../../layout/header.php'; 
?>

<h1>Gestion des sejours</h1>

<a href="insert_form.php" class="btn btn-primary">Ajouter</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Pays</th>
            <th>Description</th>
            <th>Photo</th>
            <th>durée</th>
            
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_sejours as $sejour) : ; ?>
        <tr>
            <td><?php echo $sejour["titre"]; ?></td>
            <td><?php echo $sejour["pays"]; ?></td>
            <td><?php echo $sejour["description_longue"]; ?></td>
            <td>
                <img src="<?php echo SITE_URL . "/uploads/" .$sejour["image"]; ?>" class="img-thumbnail">
            </td>
            <td><?php echo $sejour["duree"]; ?></td>
             
            
            <td class="col-actions">
                <form action="delete_query.php" method="POST" class="form-delete">
                    <input type="hidden" name="id" value="<?php echo $sejour["id"]; ?>">
                    <button type="submit" class="btn btn-danger" title="Supprimer">
                        <i class="fa fa-trash"></i>
                    
                    </button>
                    </form>
                <a href="update_form.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-warning">
                <i class="fa fa-edit"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>