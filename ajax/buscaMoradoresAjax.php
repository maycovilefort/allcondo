<?php
//  Carrega o arquivo de configuração e inicia uma Variavel para leitura do banco de dados
require ('../_app/Config.inc.php');
$Read = new Read;

//  Recupera o termo da consulta
$buscaTermo = filter_input(INPUT_GET, 'term');


//  Faz a consulta no banco de dados com o termo
$Read->FullRead("SELECT * FROM moradores WHERE mor_nome LIKE '%" . $buscaTermo . "%' ORDER BY mor_nome ASC LIMIT 0,10");

//  Cria a Array armazenando os resultados encontrados 
foreach($Read->getResult() as $Dados):
    extract($Dados);
    $Data[] = $mor_nome;
endforeach;


//  Retorna os dados em json
echo json_encode($Data);