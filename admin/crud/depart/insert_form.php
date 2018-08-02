<?php 
require_once '../../../model/database.php';

$liste_departs = getAllDeparts();

require_once '../../layout/header.php'; ?>

<h1>Ajouter un départ</h1>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date_debut</label>
        <div class="col-sm-10">
            <input type="date" name="date_debut_format" class="form-control" placeholder="date_debut">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix_format" class="form-control">
        </div>
    </div>
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de place</label>
        <div class="col-sm-10">
            <input type="number" name="nombre_de_place" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pays</label>
        <div class="col-sm-10">
            <select name="depart_id" class="form-control">
                <?php foreach ($liste_depart as $depart) : ?>
                <option value="<?php echo $depart["id"]; ?>">
                    <?php echo $depart["id"]; ?>
                    
                </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>


