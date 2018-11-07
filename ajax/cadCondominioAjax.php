<?php
include('../_app/Config.inc.php');
$Read = new Read;
sleep(1);
?>
<!--INICIO - BOX laodFormularios-->
<div class="box box-primary">
    <div class="box-body">
        <form name="" class="j_formAddCondominio" action="" method="POST">
            <div class="alert-box"></div>
            <div class="row">
                <input class="noclear" type="hidden" name="action" value="create" />

                <h3 class="col-md-12" style="padding-left: 12px;">Condomínio</h3>
                <div class="form-group col-md-6">
                    <label>Nome do Condominio:</label>
                    <input type="text" name="con_nome" class="form-control" placeholder="Nome do Condominio" />
                </div>

                <div class="form-group col-md-6">
                    <label>Endereço:</label>
                    <input type="text" name="con_endereco" class="form-control" placeholder="Endereço" />
                </div>

                <div class="form-group col-md-4">
                    <label>Bairro:</label>
                    <input type="text" name="con_bairro" class="form-control" placeholder="Bairro" />
                </div>

                <div class="form-group col-md-4">
                    <label>Cidade:</label>
                    <input type="text" name="con_cidade" class="form-control" placeholder="Cidade" />
                </div>

                <div class="form-group col-md-4">
                    <label>Estado:</label>
                    <input type="text" name="con_estado" class="form-control" placeholder="Estado" />
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