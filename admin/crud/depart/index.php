<?php 
require_once '../../../model/database.php';

$liste_departs = getAllEntities('depart');

require_once '../../layout/header.php'; 
?>

<h1>Gestion des departs</h1>

<a href="insert_form.php" class="btn btn-primary">Ajouter</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Date début</th>
            <th>Prix</th>
            <th>Nombre de place</th>
           
            
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_departs as $depart) : ; ?>
        <tr>
            <td><?php echo $depart["date_debut"]; ?></td>
            <td><?php echo $depart["prix"]; ?></td>
            <td><?php echo $depart["nombre_de_place"]; ?></td>
            
             
            
            <td class="col-actions">
                <form action="delete_query.php" method="POST" class="form-delete">
                    <input type="hidden" name="id" value="<?php echo $depart["id"]; ?>">
                    <button type="submit" class="btn btn-danger" title="Supprimer">
                        <i class="fa fa-trash"></i>
                    
                    </button>
                    </form>
                <a href="update_form.php?id=<?php echo $depart["id"]; ?>" class="btn btn-warning">
                <i class="fa fa-edit"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>