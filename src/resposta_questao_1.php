<?php

$arrayDeNumeros = explode(",", $_REQUEST['questao_1_campo_1']);
$quantidadeRotatoes = $_REQUEST['questao_1_campo_2'];

try
{
    for ($i = 0; $i < $quantidadeRotatoes; $i++) {
        $value = $arrayDeNumeros[$i];
        unset($arrayDeNumeros[$i]);
        $arrayDeNumeros[] = $value;
    }
    echo implode(',',$arrayDeNumeros);
}
catch (Exception $ex)
{
    echo "Não foi possível efetuar a operação.";
}
