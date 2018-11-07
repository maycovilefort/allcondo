<?php
include('../_app/Config.inc.php');
$Read = new Read;
sleep(1);
?>
<!--INICIO - BOX laodFormularios-->
<div class="box box-default">
    <div class="box-body">
        <form name="" class="j_formAddMoradores" action="" method="POST">
            <div class="alert-box"></div>
            <div class="row">
                <div class="col-md-2">
                    <input class="noclear" type="hidden" name="action" value="create" />
                    <textarea class="hidden" id="fotoBase64" name="mor_foto"></textarea>

                    <span>&nbsp;</span>
                    <div class="form-group col-md-12">
                        <img id="mor_foto" src="img/img_default.jpg" class="img img-responsive" />
                    </div>

                    <div class="form-group col-md-12">
                        <a class="btn btn-info btn-lg center-block j_snapshot" name="Fotagrafar"><span class="fa fa-camera"></span></a>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="form-group col-md-12">
                        <label>Nome:</label>
                        <input type="text" name="mor_nome" class="form-control" placeholder="Nome do Morador" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>CPF:</label>
                        <input type="text" name="mor_cpf" class="form-control" placeholder="CPF do Morador" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>RG:</label>
                        <input type="text" name="mor_rg" class="form-control" placeholder="RG do Morador" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>Data de Nascimento:</label>
                        <input type="date" name="mor_nasc" class="form-control" />
                    </div>

                    <div class="form-group  col-md-4">
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

                    <div class="col-md-4">
                        <label>Apartamento:</label>                                           
                        <select type="text" name="id_ap" class="form-control">
                            <option value="0">Selecionar...</option>
                        </select>
                    </div>
                    
                    <div class="col-md-4">
                        <label>Tipo:</label>                                           
                        <select type="text" name="mor_tipo" class="form-control">
                            <option value="Morador">Morador</option>
                            <option value="Comissão">Comissão</option>
                            <option value="Síndico">Síndico</option>
                            <option value="Subsíndico">Subsíndico</option>
                            <option value="Zelador">Zelador</option>
                            
                        </select>
                    </div>
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
    </div>
    <!-- end loading -->
</div>
<!--FIM - BOX laodFormularios-->