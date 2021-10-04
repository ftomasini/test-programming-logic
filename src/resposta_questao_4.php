<?php

$medidas['a'] = $_REQUEST['questao_4_campo_1'];
$medidas['b'] = $_REQUEST['questao_4_campo_2'];
$medidas['c'] = $_REQUEST['questao_4_campo_3'];
$medidas['d'] = $_REQUEST['questao_4_campo_4'];
$medidas['e'] = $_REQUEST['questao_4_campo_5'];
$medidas['f'] = $_REQUEST['questao_4_campo_6'];

$numeroDeTriangulos=0;
$triangulos='';
try
{
    foreach ($medidas as $medida1){
        foreach ($medidas as $medida2){
            foreach ($medidas as $medida3){
                $testaTriangulo = testaTriangulo($medida1,$medida2,$medida3);
                if($testaTriangulo !== '0'){
                    $numeroDeTriangulos++;
                    $triangulos .= 'O triangulo com as medidas ('.$medida1 . ',' . $medida2 . ',' .$medida3 . ') é ' . $testaTriangulo .' ';
                }
            }
        }
    }

    $retorno = 'Com as medidas informadas foi possível formar ' . $numeroDeTriangulos . ' triangulos. ';
    $retorno .= $triangulos;
    echo $retorno;
}
catch (Exception $ex)
{
    echo "Não foi possível efetuar a operação.";
}



function testaTriangulo($medida1, $medida2, $medida3){
    //Verifica se é um triangulo
	if(($medida1 + $medida2 > $medida3) && ($medida1 + $medida3 > $medida2) && ($medida2 + $medida3 > $medida1)){
        if($medida1 === $medida2 && $medida1 === $medida3){
            return "equilatero.";
        }
        else if(($medida1 === $medida2) || ($medida1 === $medida3) || ($medida2 === $medida3)){
            return  "isosceles.";
        }
        else{
            return "escaleno.";
        }
    }else{
        return "0";
    }
}