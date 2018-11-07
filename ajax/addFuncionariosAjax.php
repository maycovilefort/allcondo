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
            $jSon['error'] = "<b>Oppsss:</b> Para cadastrar um novo FUNCIONÁRIO, preencha todos os campos!"; 
        else:
            $Read->FullRead("SELECT fun_cpf FROM funcionarios WHERE fun_cpf = :fun_cpf", "fun_cpf={$Post['fun_cpf']}");
            if ($Read->getResult()):
                $jSon['error'] = "Oppsss: <b>Já existe um FUNCIONÁRIO</b> cadastrado, Por favor informe outro!";
            else:
                $Create->ExeCreate('funcionarios', $Post);
                $jSon['success'] = "Cadastro efetuado com sucesso!";
            endif;
        endif;
        break;
    default:
        $jSon['error'] = "Erro ao Selecionar Ação!";
endswitch;

echo json_encode($jSon);
