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
            $jSon['error'] = "<b>Oppsss:</b> Para cadastrar um novo APARTAMENTO, preencha todos os campos!"; 
        else:
            $Read->FullRead("SELECT * FROM apartamentos WHERE ap_desc = :ap_desc AND id_bl = :id_bl", "ap_desc={$Post['ap_desc']}&id_bl={$Post['id_bl']}");
            if ($Read->getResult()):
                $jSon['error'] = "Oppsss: <b>O APARTAMENTO {$Post['ap_desc']}</b> já está cadastrado, Por favor informe outro!";
            else:
                $Create->ExeCreate('apartamentos', $Post);
                $jSon['success'] = "Cadastro efetuado com sucesso!";
            endif;
        endif;
        break;
    default:
        $jSon['error'] = "Erro ao Selecionar Ação!";
endswitch;

echo json_encode($jSon);
