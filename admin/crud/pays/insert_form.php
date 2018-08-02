<?php require_once '../../layout/header.php'; ?>



<h1>Ajouter une pays</h1>



<form action="insert_query.php" method="post">
    <div class="form-group row">
        <label for="input-libelle" class="col-sm-2 col-form-label">Libellé</label>
        <div class="col-sm-10">
            <input type="text" name="libelle"class="form-control" id="imput-libelle" placeholder="Libellé">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Descriptif</label>
        <div class="col-sm-10">
            <textarea name="descriptif" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>

</form>






<?php require_once '../../layout/header.php'; ?>