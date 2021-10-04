<?php

$arrayDeNumeros = explode(",", $_REQUEST['questao_2_campo_1']);

try {
    foreach ($arrayDeNumeros as $elemento) {

        if ($elemento % 2 == 0) {
            $arrayPar[] = $elemento;
        } else {
            $arrayImpar[] = $elemento;
        }
    }
    $arrayParOrdenado = ordenacao($arrayPar, 'asc');
    $arrayImparOrdenado = ordenacao($arrayImpar, 'desc');

    echo implode(',',array_merge($arrayParOrdenado,$arrayImparOrdenado));

}
catch (Exception $ex)
{
    echo "Não foi possível efetuar a operação.";
}


function ordenacao($lista, $tipo='asc')
{
    switch ($tipo) {
        case 'asc':
            $aux = null;
            for ($i = 0; $i < count($lista); $i++) {
                if ($i < count($lista) - 1)
                    $k = $i + 1;
                for ($j = 0; $j < count($lista); $j++) {
                    if ($lista[$j] > $lista[$k]) {
                        $aux = $lista[$j];
                        $lista[$j] = $lista[$k];
                        $lista[$k] = $aux;
                    }
                }
            }
            return $lista;
            break;
        case 'desc':
            $aux = null;
            for ($i = 0; $i < count($lista); $i++) {
                if ($i < count($lista) - 1)
                    $k = $i + 1;
                for ($j = 0; $j < count($lista); $j++) {
                    if ($lista[$j] < $lista[$k]) {
                        $aux = $lista[$j];
                        $lista[$j] = $lista[$k];
                        $lista[$k] = $aux;
                    }
                }
            }
            return $lista;
            break;
        default:
            echo 'Error';
    }
}
