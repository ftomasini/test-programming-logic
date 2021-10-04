<?php
try
{
    $arestas = [
        ["a", "b", 7],
        ["a", "d", 5],
        ["b", "d", 9],
        ["b", "c", 8],
        ["b", "e", 7],
        ["d", "e", 15],
        ["d", "f", 6],
        ["c", "e", 5],
        ["f", "e", 8],
        ["f", "g", 11],
        ["e", "g", 9],
    ];
    $path = encontrarMenorCaminho($arestas, "a", "e");

}
catch (Exception $ex)
{
    echo "Não foi possível efetuar a operação.";
}

function encontrarMenorCaminho($arestas, $inicio, $fim)
{

    foreach ($arestas as $aresta) {

    }

}