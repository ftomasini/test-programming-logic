<?php

$retangulo1 = $_REQUEST['questao_6_campo_1'];
$retangulo2 = $_REQUEST['questao_6_campo_2'];

list($_1_inferior_esquerdo_x, $_1_inferior_esquerdo_y, $_1_superior_direito_x, $_1_superior_direito_y, $_1_inferior_direito_x, $_1_inferior_direito_y, $_1_superior_esquerdo_x, $_1_superior_esquerdo_y) = str_replace('(', str_replace(')', explode(",", $retangulo1)));
list($_2_inferior_esquerdo_x, $_2_inferior_esquerdo_y, $_2_superior_direito_x, $_2_superior_direito_y, $_2_inferior_direito_x, $_2_inferior_direito_y, $_2_superior_esquerdo_x, $_2_superior_esquerdo_y) = str_replace('(', str_replace(')', explode(",", $retangulo2)));

try {
    if (
        $_1_superior_esquerdo_x > $_2_inferior_direito_x ||
        $_1_inferior_direito_x < $_2_superior_esquerdo_x ||
        $_1_superior_esquerdo_y < $_2_inferior_direito_y ||
        $_1_inferior_direito_y > $_2_superior_esquerdo_y){
        echo 'Não está sobrepondo';
    }
    else {
        echo 'Está sobrepondo';
    }
}
catch (Exception $ex)
{
    echo "Não foi possível efetuar a operação.";
}