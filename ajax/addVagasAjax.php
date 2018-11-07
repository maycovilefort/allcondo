<?php

$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$setPost = array_map('strip_tags', $getPost);
$Post = array_map('trim', $setPost);

$Action = $Post['action'];
$jSon = array();
unset($Post['action']);
sleep(1);

if ($Action):
    require '../_app/Config.inc.php';
    $Read = new Read;
    $Create = new Create;
endif;

switch ($Action):
    case 'create':
        if (in_array('', $Post)):
            $jSon['error'] = "<b>Oppsss:</b> Para cadastrar um novo VAGAS, preencha todos os campos!"; 
        else:
            $Read->FullRead("SELECT vag_desc FROM vagas WHERE vag_desc = :vag_desc AND vag_tipo = :vag_tipo AND id_bl = :id_bl", "vag_desc={$Post['vag_desc']}&vag_tipo={$Post['vag_tipo']}&id_bl={$Post['id_bl']}");
            if ($Read->getResult()):
                $jSon['error'] = "Oppsss: <b>Já existe um VAGAS</b> cadastrado, Por favor informe outro!";
            else:
                $Create->ExeCreate('vagas', $Post);
                $jSon['success'] = "Cadastro efetuado com sucesso!";
            endif;
        endif;
        break;
    default:
        $jSon['error'] = "Erro ao Selecionar Ação!";
endswitch;

echo json_encode($jSon);
