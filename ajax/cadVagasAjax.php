<?php
include('../_app/Config.inc.php');
$Read = new Read;
sleep(1);
?>
<!--INICIO - BOX laodFormularios-->
<div class="box box-primary">
    <div class="box-body">
        <form name="" class="j_formAddVagas" action="" method="POST">
            <div class="alert-box"></div>
            <div class="row">
                <input class="noclear" type="hidden" name="action" value="create" />

                <div class="form-group col-md-3">
                    <label>Tipo de Vaga:</label>
                    <select type="text" name="vag_tipo" class="form-control">
                        <option value="0">Selecionar...</option>
                        <option value="1">Condômino</option>
                        <option value="2">Visitante</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>Vaga:</label>
                    <input type="text" name="vag_desc" class="noclear form-control" placeholder="Codigo da Vaga" />
                </div>

                <div class="form-group  col-md-3">
                    <label>Bloco:</label>                                           
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
                </div>
                
                <div id="CarregaVagas"></div>
                
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
    </div>
    <!-- end loading -->
</div>
<!--FIM - BOX laodFormularios-->