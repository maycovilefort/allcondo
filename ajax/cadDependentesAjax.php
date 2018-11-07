<?php
include('../_app/Config.inc.php');
$Read = new Read;
sleep(1);
?>
<!--INICIO - BOX Consulta Moradores-->
<div class="box box-primary">
    <div class="box-body">
        <form name="" class="j_buscaMorador" action="" method="POST">
            <div class="alert-box"></div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Pesquisar Morador:</label>
                    <input id="busca_mor" type="text" class="form-control" placeholder="Nome do Morador" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button class="btn btn-primary">Inserir Novo Dependente <span class="fa fa-Child"></span></button>

                        <img class="form_load" style="display: none;" src="img/load.gif" />
                    </div>
                </div>
            </div>
        </form>
    </div> 
</div>
<!-- FIM - BOX Consulta Moradores -->