<?php
require_once '../../../model/database.php';
$id = $_GET["id"];
$pays = getOneEntity("pays", $id);


require_once '../../layout/header.php';
?>


<h1>Modifier un Pays</h1>



<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="input-libelle" class="col-sm-2 col-form-label">Libellé</label>
        <div class="col-sm-10">
            <input type="text" name="libelle" value="<?php echo $pays["libelle"]; ?>" class="form-control" id="imput-libelle" placeholder="Libellé">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Descriptif</label>
        <div class="col-sm-10">
            <textarea name="descriptif" class="form-control">
                <?php echo $pays["descriptif"]; ?>
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $pays["image"]; ?>" class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-9">
            <input type="file" name="image" accept="images/*" class="form-control">
        </div>
    </div>
</div>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<button type="submit" class="btn btn-success float-right">
    <i class="fa fa-save"></i>
    Enregistrer
</button>

</form>






<?php require_once '../../layout/header.php'; ?>
