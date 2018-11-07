<?php
include('../_app/Config.inc.php');
$Read = new Read;

$Morador = strtoupper(filter_input(INPUT_POST, 'morador'));
$Read->FullRead("SELECT * FROM moradores WHERE mor_nome LIKE '%" . $Morador . "%'");

foreach ($Read->getResult() as $Dados):
    extract($Dados);
endforeach;
?>

<!--INICIO - BOX Cadastro de Dependentes-->
<div class="box box-default">
    <div class="box-body">
        <form name="" class="j_formAddDependentes" action="" method="POST">
            <div class="alert-box"></div>
            <input class="noclear" type="hidden" name="action" value="create" />
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group col-md-12">
                        <span>&nbsp;</span>
                        <div class="form-group col-md-12">
                            <img id="morador_foto" src="<?= "data:image/png;base64," . $mor_foto; ?>" class="img img-responsive" />
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <input type="hidden" name="id_mor" value="<?= $mor_id; ?>" class="noclear"/>
                    <div class="form-group col-md-4">
                        <label>Nome do Morador:</label>
                        <input type="hidden" name="mor_nome" value="<?= $mor_nome; ?>" class="noclear" />
                        <p><?= $mor_nome; ?></p>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Bloco:</label>
                        <input type="hidden" name="id_bl" value="<?= $id_bl; ?>" class="noclear" />
                        <p><?= $id_bl; ?></p>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Apartamento:</label>
                        <input type="hidden" name="id_ap" value="<?= $id_ap; ?>" class="noclear" />
                        <p><?= $id_ap; ?></p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-2">

                    <textarea class="hidden" id="fotoBase64" name="dep_foto"></textarea>

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
                        <label>Nome do Dependente:</label>
                        <input type="text" name="dep_nome" class="form-control" placeholder="Nome do Dependente" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>CPF:</label>
                        <input type="text" name="dep_cpf" class="form-control" placeholder="CPF do Dependente" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>RG:</label>
                        <input type="text" name="dep_rg" class="form-control" placeholder="RG do Dependente" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>Data de Nascimento:</label>
                        <input type="date" name="dep_nasc" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button class="btn btn-primary">Cadastar <span class="fa fa-edit"></span></button>

                        <img class="form_load" style="display: none;" src="img/load.gif" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--FIM - BOX Cadastro de Dependentes-->