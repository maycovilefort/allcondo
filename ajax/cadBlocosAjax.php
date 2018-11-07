<?php
include('../_app/Config.inc.php');
$Read = new Read;
sleep(1);
?>

<form name="" class="j_formAddBlocos" action="" method="POST">
    <div class="alert-box"></div>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="noclear" type="hidden" name="action" value="create" />
            <label>Bloco:</label>
            <input type="text" name="bl_desc" class="form-control" placeholder="Numero do Apartamento" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-primary">Cadastar<span class="fa fa-edit"></span></button>

                <img class="form_load" style="display: none;" src="img/load.gif" />
            </div>
        </div>
    </div>
</form>