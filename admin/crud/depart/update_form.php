<?php

require_once '../../../model/database.php';
$id = $_GET["id"];
$depart = getOneEntity("depart", $id);

$liste_sejour = getAllEntities("sejour");
require_once '../../layout/header.php'; 


?>


<h1>Modifier un depart</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de début</label>
        <div class="col-sm-10">
            <input type="number" name="date" value="<?php echo $depart["date"]; ?>" class="form-control">
        </div>
    </div>  
     <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" value="<?php echo $depart["prix"]; ?>" class="form-control">
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
            <select name="sejour_id" class="form-control">
                <?php foreach ($liste_sejours as $sejour) : ?>
                    <?php $selected = ($sejour["id"] == $depart["sejour_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $sejour["id"]; ?>" <?php echo $selected; ?>>
                    <?php echo $sejour["id"]; ?>
                    
                </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>






<?php require_once '../../layout/footer.php'; ?>
