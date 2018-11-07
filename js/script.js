$(document).ready(function () {

//  Carrega o Formulario para cadastro
    $('.j_cadastro').click(function () {
        var LoadBlock = $(this).attr('name');
        $.ajax({
            url: 'ajax/cad' + LoadBlock + 'Ajax.php',
            dataType: 'html',
            beforeSend: function () {
                $('.content-header').attr('id', LoadBlock);
                $('.content-header').html('<h1>Cadastro de ' + LoadBlock + ' <img class="loader" src="img/load.gif" /></h1>');
            },
            success: function (resposta) {
                $('.content').html(resposta);
                $('.loader').fadeOut(500);
            }
        });
        return false;
    });
    
    
    //  Abre a Modal e Carrega CadBlocos
    $('.content').on('click', '.j_addBloco', function () {
        var LoadBlock = $(this).attr('name');
        var cadModal = $('.cadModal');
        cadModal.modal('show');
        $.ajax({
            url: 'ajax/cad' + LoadBlock + 'ajax.php',
            beforeSend: function () {
                cadModal.find('.modal-title').html('<span>Cadastro de ' + LoadBlock + ' <img class="loader" src="img/load.gif" /></span>');
            },
            success: function (resposta) {
                cadModal.find('.modal-body').html(resposta);
                cadModal.find('.loader').fadeOut(500);
            }
        });
        return false;
    });
    
    
    //  Regarrega o Box quando a cadModal é fechada
    $('.cadModal').on('hidden.bs.modal', function () {
        var ReloadBlock = $('.content-header').attr('id');
        $.ajax({
            url: 'ajax/cad' + ReloadBlock + 'ajax.php',
            dataType: 'html',
            beforeSend: function () {
                $('.loader').fadeIn(500);
            },
            success: function (resposta) {
                $('.content').html(resposta);
                $('.loader').fadeOut(500);
            }
        });
    });
    
    
    //  Cadastro de Condominio
    $('.content').on('submit', '.j_formAddCondominio', function () {
        var data = $(this).serialize();
        var form = $(this);
        $.ajax({
            url: 'ajax/addCondominioAjax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                form.find('.form_load').fadeIn();
                form.find('.alert-box').fadeOut();
            },
            success: function (resposta) {
                if (resposta.error) {
                    form.find('.alert-box').html('<div class="alert alert-danger">' + resposta.error + '</div>');
                    form.find('.alert-box').fadeIn();
                } else {
                    form.find('.alert-box').html('<div class="alert alert-success">' + resposta.success + '</div>');
                    form.find('.alert-box').fadeIn();
                    form.find('input[class!="noclear"]').val('');
                }
                form.find('.form_load').fadeOut();
            }

        });
        return false;
    });
    
    
    //  Cadastro de Apartamentos
    $('.content').on('submit', '.j_formAddApartamentos', function () {
        var data = $(this).serialize();
        var form = $(this);
        $.ajax({
            url: 'ajax/addApartamentosAjax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                form.find('.form_load').fadeIn();
                form.find('.alert-box').fadeOut();
            },
            success: function (resposta) {
                if (resposta.error) {
                    form.find('.alert-box').html('<div class="alert alert-danger">' + resposta.error + '</div>');
                    form.find('.alert-box').fadeIn();
                } else {
                    form.find('.alert-box').html('<div class="alert alert-success">' + resposta.success + '</div>');
                    form.find('.alert-box').fadeIn();
                    form.find('input[class!="noclear"]').val('');
                }
                form.find('.form_load').fadeOut();
            }

        });
        return false;
    });
    
    
    //  Cadastro de BLOCOS
    $('.cadModal').on('submit', '.j_formAddBlocos', function () {
        var data = $(this).serialize();
        var cadModal = $(this);
        $.ajax({
            url: 'ajax/addBlocosAjax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                cadModal.find('.form_load').fadeIn();
                cadModal.find('.alert-box').fadeOut();
            },
            success: function (resposta) {
                if (resposta.error) {
                    cadModal.find('.alert-box').html('<div class="alert alert-danger">' + resposta.error + '</div>');
                    cadModal.find('.alert-box').fadeIn();
                } else {
                    cadModal.find('.alert-box').html('<div class="alert alert-success">' + resposta.success + '</div>');
                    cadModal.find('.alert-box').fadeIn();
                    cadModal.find('input[class!="noclear"]').val('');
                }
                cadModal.find('.form_load').fadeOut();
            }
        });
        return false;
    });
    
    
    //  Cadastro de MORADORES
    $('.content').on('submit', '.j_formAddMoradores', function () {
        var data = $(this).serialize();
        var form = $(this);
        $.ajax({
            url: 'ajax/addMoradoresAjax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                form.find('.form_load').fadeIn();
                form.find('.alert-box').fadeOut();
            },
            success: function (resposta) {
                if (resposta.error) {
                    form.find('.alert-box').html('<div class="alert alert-danger">' + resposta.error + '</div>');
                    form.find('.alert-box').fadeIn();
                } else {
                    form.find('.alert-box').html('<div class="alert alert-success">' + resposta.success + '</div>');
                    form.find('.alert-box').fadeIn();
                    form.find('input[class!="noclear"]').val('');
                }
                form.find('.form_load').fadeOut();
            }

        });
        return false;
    });
    
    
    //  Fitrar APARTAMENTOS = BLOCO selecionado (Cadastro de MORADORES)
    $('.content').on('change', 'select[name="id_bl"]', function () {
        var filAp = $('select[name="id_bl"]').val();
        $.ajax({
            url: 'ajax/filApartamentosAjax.php',
            data: {filap: filAp},
            type: 'POST',
            dataType: 'html',
            success: function (resposta) {
                $(resposta).replaceAll('select[name="id_ap"]');
            }
        });
    });


    //  Abre a MODAL e Carrega a WEBCAM do usuario (Cadastro de MORADORES)
    $('.content').on('click', '.j_snapshot', function () {
        var LoadBlock = $(this).attr('name');
        var webCamModal = $('.webCamModal');
        webCamModal.modal('show');
        $.ajax({
            url: 'ajax/webcam.php',
            dataType: 'html',
            beforeSend: function () {
                webCamModal.find('.modal-title').html('<span>' + LoadBlock + ' <img class="loader" src="img/load.gif" /></span>');
            },
            success: function (resposta) {
                webCamModal.find('.modal-body').html(resposta);
                webCamModal.find('.loader').fadeOut(500);
            }
        });
        return false;
    });
    
    
    //  AutoComplete do INPUT para buscar MORADORES (Cadastro de DEPENDENTES)
    $('.content').on('click', '#busca_mor', function () {
        $('#busca_mor').autocomplete({
            source: 'ajax/buscaMoradoresAjax.php',
            autoFocus: true,
            minLength: 1
        });
    });
    
    
    //  Carrega BOX de Cadastro de DEPENDENTES com o MORADOR Selecionado
    $('.content').on('submit', '.j_buscaMorador', function () {
        var morador = $('#busca_mor').val();
        $.ajax({
            url: 'ajax/dependentesCadAjax.php',
            data: {morador: morador},
            type: 'POST',
            dataType: 'html',
            beforeSend: function () {
                $('.content-header').html('<h1>Cadastro de Dependentes <img class="loader" src="img/load.gif" /></h1>');
            },
            success: function (resposta) {
                $('.content').html(resposta);
                $('.loader').fadeOut(500);
            }
        });
        return false;
    });
    
    
    //  Cadastro de DEPENDENTES
    $('.content').on('submit', '.j_formAddDependentes', function () {
        var data = $(this).serialize();
        var form = $(this);
        $.ajax({
            url: 'ajax/addDependentesAjax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                form.find('.form_load').fadeIn();
                form.find('.alert-box').fadeOut();
            },
            success: function (resposta) {
                if (resposta.error) {
                    form.find('.alert-box').html('<div class="alert alert-danger">' + resposta.error + '</div>');
                    form.find('.alert-box').fadeIn();
                } else {
                    form.find('.alert-box').html('<div class="alert alert-success">' + resposta.success + '</div>');
                    form.find('.alert-box').fadeIn();
                    form.find('input[class!="noclear"]').val('');
                }
                form.find('.form_load').fadeOut();
            }

        });
        return false;
    });
    
    
    //  Carrega ou Remove Campos para cadastro de Veiculo (Cadastro de VAGAS)
    $('.content').on('change', 'select[name="vag_tipo"]', function () {
        var TipoVaga = $('select[name="vag_tipo"]').val();
        if (TipoVaga === '1') {
            $('#CarregaVagas').append('<div class="form-group col-md-3">' +
                    '<label>Apartamento:</label>' +
                    '<select type="text" name="id_ap" class="form-control">' +
                    '<option value="0">Selecionar...</option>' +
                    '</select>' +
                    '</div>' +
                    '<div class="form-group col-md-4">' +
                    '<label>Placa:</label>' +
                    '<input type="text" name="vag_placa" class="form-control" placeholder="Placa do Veículo" />' +
                    '</div>' +
                    '<div class="form-group col-md-4">' +
                    '<label>Modelo:</label>' +
                    '<input type="text" name="vag_modelo" class="form-control" placeholder="Modelo do Veículo" />' +
                    '</div>' +
                    '<div class="form-group col-md-4">' +
                    '<label>Cor:</label>' +
                    '<input type="text" name="vag_cor" class="form-control" placeholder="Cor do Veículo" />' +
                    '</div>');
        } else if (TipoVaga === '2') {
            $('#CarregaVagas').html('');
        }
    });
    
    
    //  Cadastro de VAGAS
    $('.content').on('submit', '.j_formAddVagas', function () {
        var data = $(this).serialize();
        var form = $(this);
        $.ajax({
            url: 'ajax/addVagasAjax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                form.find('.form_load').fadeIn();
                form.find('.alert-box').fadeOut();
            },
            success: function (resposta) {
                if (resposta.error) {
                    form.find('.alert-box').html('<div class="alert alert-danger">' + resposta.error + '</div>');
                    form.find('.alert-box').fadeIn();
                } else {
                    form.find('.alert-box').html('<div class="alert alert-success">' + resposta.success + '</div>');
                    form.find('.alert-box').fadeIn();
                    form.find('input[class!="noclear"]').val('');
                }
                form.find('.form_load').fadeOut();
            }

        });
        return false;
    });
    
    
    //  Cadastro de FUNCIONÁRIOS
    $('.content').on('submit', '.j_formAddFuncionarios', function () {
        var data = $(this).serialize();
        var form = $(this);
        $.ajax({
            url: 'ajax/addFuncionariosAjax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                form.find('.form_load').fadeIn();
                form.find('.alert-box').fadeOut();
            },
            success: function (resposta) {
                if (resposta.error) {
                    form.find('.alert-box').html('<div class="alert alert-danger">' + resposta.error + '</div>');
                    form.find('.alert-box').fadeIn();
                } else {
                    form.find('.alert-box').html('<div class="alert alert-success">' + resposta.success + '</div>');
                    form.find('.alert-box').fadeIn();
                    form.find('input[class!="noclear"]').val('');
                }
                form.find('.form_load').fadeOut();
            }

        });
        return false;
    });
});