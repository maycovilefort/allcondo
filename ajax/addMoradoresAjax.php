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
            $jSon['error'] = "<b>Oppsss:</b> Para cadastrar um novo MORADOR, preencha todos os campos!"; 
        else:
            $Read->FullRead("SELECT id_bl, id_ap FROM moradores WHERE id_bl = :id_bl AND id_ap = :id_ap", "id_bl={$Post['id_bl']}&id_ap={$Post['id_ap']}");
            if ($Read->getResult()):
                $jSon['error'] = "Oppsss: <b>Já existe um MORADOR</b> cadastrado neste Bloco e Apartamento, Por favor informe outro!";
            else:
                $Create->ExeCreate('moradores', $Post);
                $jSon['success'] = "Cadastro efetuado com sucesso!";
            endif;
        endif;
        break;
    default:
        $jSon['error'] = "Erro ao Selecionar Ação!";
endswitch;

echo json_encode($jSon);
