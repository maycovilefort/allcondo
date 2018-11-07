<?php
include('../_app/Config.inc.php');
$Read = new Read;
sleep(1);
?>
<!--INICIO - BOX laodFormularios-->
<div class="box box-default">
    <div class="box-body">
        <form name="" class="j_formAddApartamentos" action="" method="POST">
            <div class="alert-box"></div>
            <div class="row">
                <input class="noclear" type="hidden" name="action" value="create" />
                
                <div class="form-group col-md-6">
                    <label>Bloco:</label>
                    <div class="input-group">                        
                        <select type="text" name="id_bl" class="form-control">
                            <option value="0">Selecionar...</option>
                            <?php
                            $Read->ExeRead("blocos");
                            if ($Read->getResult()):
                                foreach ($Read->getResult() as $Dados):
                                    extract($Dados);
                                    ?>
                                    <option value="<?= $bl_id; ?>"><?= $bl_desc; ?></option>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </select>

                        <div class="input-group-btn">
                            <button name="Blocos" class="btn btn-info j_addBloco" title="Adicionar novo Bloco!"><i class="fa fa-plus-circle"></i></button>
                        </div>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label>Apartamento:</label>
                    <input type="text" name="ap_desc" class="form-control" placeholder="Numero do Apartamento" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="right-block">
                        <button class="btn btn-primary">Cadastrar
                            <span class="glyphicon glyphicon-saved"></span></button>

                        <img class="form_load" style="display: none;" src="img/load.gif" />
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end loading -->
</div>
<!--FIM - BOX laodFormularios-->