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
            $jSon['error'] = "<b>Oppsss:</b> Para cadastrar um um Condominio, preencha todos os campos!"; 
        else:
            $Read->FullRead("SELECT * FROM condominio WHERE con_nome = :con_nome", "con_nome={$Post['con_nome']}");
            if ($Read->getResult()):
                $jSon['error'] = "Oppsss: <b>O Condominio {$Post['con_nome']}</b> já está cadastrado, Por favor informe outro!";
            else:
                $Create->ExeCreate('condominio', $Post);
                $jSon['success'] = "Cadastro efetuado com sucesso!";
            endif;
        endif;
        break;
    default:
        $jSon['error'] = "Erro ao Selecionar Ação!";
endswitch;

echo json_encode($jSon);
