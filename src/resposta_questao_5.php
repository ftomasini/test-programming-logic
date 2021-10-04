<?php

$texto = $_POST['questao_5_campo_1'];
$subTexto = $_POST['questao_5_campo_2'];

try
{
    echo buscaTexto($texto,$subTexto);
}
catch (Exception $ex)
{
    echo "Não foi possível efetuar a operação.";
}


function buscaTexto($texto, $subTexto)
{
    $palavrasTexto = explode(' ', $texto);
    $palavrasSubTexto = explode(' ', $subTexto);

    $combinacoes = 0;
    $textoComum ="";
    foreach ($palavrasSubTexto as $palavraSubTexto){

        foreach ($palavrasTexto as $key=>$palavraTexto){
            $combinacoes = 0;
            if($palavraSubTexto === $palavraTexto) {
                $combinacoes++;
                if ($combinacoes >= 1) {
                    $textoComum .= ' '. $palavraTexto??'';
                }
                break;
            }
        }
    }
    return $textoComum;
}
