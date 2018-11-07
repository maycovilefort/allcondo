<?php

$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$setPost = array_map('strip_tags', $getPost);
$Post = array_map('trim', $setPost);

$Action = $Post['action'];
$jSon = array();
unset($Post['action']);
unset($Post['mor_nome']);
sleep(1);

if ($Action):
    require '../_app/Config.inc.php';
    $Read = new Read;
    $Create = new Create;
endif;

switch ($Action):
    case 'create':
        if (in_array('', $Post)):
            $jSon['error'] = "<b>Oppsss:</b> Para cadastrar um novo DEPENDENTE, preencha todos os campos!";
        else:
            $Create->ExeCreate('dependentes', $Post);
            $jSon['success'] = "Cadastro efetuado com sucesso!";
        endif;

        break;
    default:
        $jSon['error'] = "Erro ao Selecionar Ação!";
endswitch;

echo json_encode($jSon);
