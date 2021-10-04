<?php

$dataInicial = $_REQUEST['questao_3_campo_1'];
$dataFinal = $_REQUEST['questao_3_campo_2'];

try
{
    $numeroDias = numeroDiasEntreDatas($dataInicial,$dataFinal);
    echo 'O número de dias entre as duas datas é: '. $numeroDias;
}
catch (Exception $ex)
{
    echo "Não foi possível efetuar a operação.";
}

function numeroDiasEntreDatas($dataInicial, $dataFinal)
{
    $dataInicial = explode('-', $dataInicial);
    $dataFinal = explode('-', $dataFinal);

    $dia1 = $dataInicial[2];
    $mes1 = $dataInicial[1];
    $ano1 = $dataInicial[0];

    $dia2 = $dataFinal[2];
    $mes2 = $dataFinal[1];
    $ano2 = $dataFinal[0];

    $dias = 0;

    $totalDiasMes1 = obterDiasMes($mes1, $ano1);
    $totalDiasMes2 = obterDiasMes($mes2, $ano2);

    //Se data inicial e final for do mesmo ano
    if ($ano2 == $ano1) {
        if ($mes1 == $mes2) {
            $dias = $dia2 - $dia1;
        } else {
            //dias do primeiro mes (do dia x até o dia 30)
            $diasMes1 = ($totalDiasMes1 - $dia1) + 1;
            //dias do ultimo mes (do dia 1 até o dia x)
            $diasMes2 = $totalDiasMes2 - ($totalDiasMes2 - $dia2);
            //quantidade de meses entre o primeiro e o ultimo mes;
            $intervaloMeses = ($mes2 - $mes1);
            //datas do mesmo mes
            if ($intervaloMeses == 0) {
                $dias = $diasMes1 + $diasMes2;
            } else {
                for ($i = 1; $i < $intervaloMeses; $i++) {
                    $dias += obterDiasMes($mes1 + $i, $ano1);
                }
                $dias += ($diasMes1 + $diasMes2);
            }
        }
    } else {//Calculo para anos diferentes
        //Meses até fim do ano, o primeiro mes nao esta incluido
        $mesesAno1 = 12 - $mes1;
        //dias do primeiro mes (inicial)
        $diasMes1 = $totalDiasMes1 - $dia1;
        for ($i = 0; $i < $mesesAno1; $i++) {
            $dias += obterDiasMes($mes1 + $i, $ano1);
        }
        $dias += $diasMes1;
        //dias do ultimo mes do periodo
        $diasMes2 = $totalDiasMes2 - ($totalDiasMes2 - $dia2);
        //Numero de meses do mes 1 ate o mes x do novo ano;
        $mesesAno2 = $mes2 - 1;
        for ($i = 0; $i < $mesesAno2; $i++) {
            $dias += obterDiasMes($mes2, $ano2);
        }
        $dias += $diasMes2;

        if ($ano2 - $ano1 > 1) {
            $dias += 365 * ($ano2 - $ano1 - 1);    // quantidade de anos entre o primeiro e o ultimo ano;
        }
    }
    return $dias;
}

function verificaBissexto($ano)
{
    $bissexto = false;
    if ($ano % 4 == 0) {
        $bissexto = true;
    }
    return $bissexto;
}

function obterDiasMes($mes, $ano)
{
    $diasMes = ['1' => 31,
        '2' => 28,
        '3' => 31,
        '4' => 30,
        '5' => 31,
        '6' => 30,
        '7' => 31,
        '8' => 31,
        '9' => 30,
        '10' => 31,
        '11' => 30,
        '12' => 31
    ];

    if (verificaBissexto($ano)) {
        $diasMes['2'] = 29;
    }

    return $diasMes[$mes];
}