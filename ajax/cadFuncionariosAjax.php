<?php
include('../_app/Config.inc.php');
$Read = new Read;
sleep(1);
?>
<!--INICIO - BOX laodFormularios-->
<div class="box box-default">
    <div class="box-body">
        <form name="" class="j_formAddFuncionarios" action="" method="POST">
            <div class="alert-box"></div>
            <div class="row">
                <div class="col-md-2">
                    <input class="noclear" type="hidden" name="action" value="create" />
                    <textarea class="hidden" id="fotoBase64" name="fun_foto"></textarea>

                    <span>&nbsp;</span>
                    <div class="form-group col-md-12">
                        <img id="mor_foto" src="img/img_default.jpg" class="img img-responsive" />
                    </div>

                    <div class="form-group col-md-12">
                        <a class="btn btn-info btn-lg center-block j_snapshot" name="Fotagrafar"><span class="fa fa-camera"></span></a>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="form-group col-md-5">
                        <label>Nome:</label>
                        <input type="text" name="fun_nome" class="form-control" placeholder="Nome do Funcionário" />
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label>Telefone:</label>
                        <input type="text" name="fun_telefone" class="form-control" placeholder="Telefone do Funcionário" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>E-mail:</label>
                        <input type="text" name="fun_email" class="form-control" placeholder="E-mail do Funcionário" />
                    </div>  

                    <div class="form-group col-md-4">
                        <label>CPF:</label>
                        <input type="text" name="fun_cpf" class="form-control" placeholder="CPF do Funcionário" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>RG:</label>
                        <input type="text" name="fun_rg" class="form-control" placeholder="RG do Funcionário" />
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label>Data de Nascimento:</label>
                        <input type="date" name="fun_nasc" class="form-control" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>Hora Entrada:</label>
                        <input type="time" name="fun_entrada" class="form-control" />
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label>Hora Saida:</label>
                        <input type="time" name="fun_saida" class="form-control" />
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