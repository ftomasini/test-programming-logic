<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>

    <!-- Bootstrap CSS

        <title>Teste de lógica de programação!</title>

                <h1>Teste de lógica de programação</h1>

    -->

</head>
<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
        </div>
        <div class="col-md-auto">
            <h1>Tw</h1>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>


    <div class="row justify-content-md-center" style="margin-top: 50px">
        <h5>Regras</h5>
    </div>
    <div class="row justify-content-md-center">
        <code class="language-html" data-lang="html">
            <pre>
Antes de iniciar, seguem algumas dicas importantes:
● Utilize o PHP (sem frameworks), pois é a linguagem que utilizamos atualmente aqui no Bling;
● Evite plágios - queremos ver o seu conteúdo! (e questões copiadas serão zeradas);
● Nós lhe daremos um período de 7 dias (corridos) para devolução da atividade. Nossa
expectativa é que você seja capaz de finalizá-lo em algumas poucas horas de trabalho
dedicado. Não existe tempo bom ou tempo ruim, o importante é fazer da melhor forma
possível. Por isso, pedimos que registre o tempo e nos informe na devolução do mesmo.
Confiança é a chave do sucesso.
● Você pode pesquisar, estudar, copiar e melhorar. O mais importante é que você seja capaz de
explicar a solução e os caminhos escolhidos, pois se passar para a próxima fase, terá que
defender sua solução junto com nosso time de técnicos.
● Envie o teste no formato zip ou link para acesso ao repositório (GitHub, GitLab, etc)
respondendo o e-mail.
**********************************************************************************************
            </pre>
        </code>
    </div>


    <div class="accordion" id="accordionExample">

        <!--  QUESTAO 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne">
                    <b>
                        1. Escrever um algoritmo que rotacione um array em k posições. Exemplo: o array [1,2,3,4,5,6] se
                        for girado duas posições para a esquerda se torna [3,4,5,6,1,2]. Tente resolver sem usar uma
                        cópia
                        da array
                    </b>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="row ">
                        <h6>Resposta</h6>

                        <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_1.php')); ?>
                        </pre>
                    </div>
                    <div class="row">
                        <h6>Executar código</h6>

                        <div class="col">

                            <div class="mb-3">
                                <label class="form-label">Array com valores a serem rotacionados</label>
                                <input type="text" id="questao_1_campo_1" value="1,2,3,4,5,6"
                                       placeholder="1,2,3,4,5,6,7,8,9,10"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Número de rotações</label>
                                <input type="text" id="questao_1_campo_2" value="2" placeholder="2"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit" onclick="executar_ajax(1)">Executar
                                    comando
                                </button>
                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">Saída</label>
                            </div>
                            <div id="retorno_questao_1" class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  QUESTAO 2 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                <b>
                    2. Criar um algoritmo que leia um vetor de números e reordene este vetor contendo no início os
                    números pares de forma crescente e, depois, os ímpares de forma decrescente.
                </b>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-body">

                    <div class="row ">
                        <h6>Resposta</h6>

                        <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_2.php')); ?>
                        </pre>
                    </div>
                    <div class="row">
                        <h6>Executar código</h6>

                        <div class="col">

                            <div class="mb-3">
                                <label class="form-label">Array com valores a serem rotacionados</label>
                                <input type="text" id="questao_2_campo_1" value="5,2,7,3,9,-1,-4,10"
                                       placeholder="1,2,3,4,5,6,7,8,9,10"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit" onclick="executar_ajax(2)">Executar
                                    comando
                                </button>
                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">Saída</label>
                            </div>
                            <div id="retorno_questao_2" class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <b>
                    3. Escreva um algoritmo que calcule o tempo em dias a partir de uma data inicial e final recebidos
                    no formato dd/mm/aaaa. Não deve usar funções de data e hora.
                </b>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-body">

                    <div class="row ">
                        <h6>Resposta</h6>

                        <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_3.php')); ?>
                        </pre>
                    </div>
                    <div class="row">
                        <h6>Executar código</h6>

                        <div class="col">

                            <div class="mb-3">
                                <label class="form-label">Data inicial</label>
                                <input type="date" id="questao_3_campo_1" value="01/01/2021"
                                       placeholder=""
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Data final</label>
                                <input type="date" id="questao_3_campo_2" value="20/03/2021" placeholder=""
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit" onclick="executar_ajax(3)">Executar
                                    comando
                                </button>
                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">Saída</label>
                            </div>
                            <div id="retorno_questao_3" class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <b>
                    4. Receba 6 números representando medidas a,b,c,d,e e f e relacionar quantos e quais triângulos é
                    possível formar usando estas medidas. Exemplo [abc], [abd]...
                </b>
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-body">

                    <div class="row ">
                        <h6>Resposta</h6>

                        <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_4.php')); ?>
                        </pre>
                    </div>
                    <div class="row">
                        <h6>Executar código</h6>

                        <div class="col">

                            <div class="mb-3">
                                <label class="form-label">Medida a</label>
                                <input type="text" id="questao_4_campo_1" value="1" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Medida b</label>
                                <input type="text" id="questao_4_campo_2" value="3" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Medida c</label>
                                <input type="text" id="questao_4_campo_3" value="4" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Medida d</label>
                                <input type="text" id="questao_4_campo_4" value="6" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Medida e</label>
                                <input type="text" id="questao_4_campo_5" value="8" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Medida f</label>
                                <input type="text" id="questao_4_campo_6" value="4" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit" onclick="executar_ajax(4)">Executar
                                    comando
                                </button>
                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">Saída</label>
                            </div>
                            <div id="retorno_questao_4" class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <b>
                    5. Um algoritmo deve buscar um sub-texto dentro de um texto fornecido. (Não usar funções de busca
                    em string).
                </b>
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-body">

                    <div class="row ">
                        <h6>Resposta</h6>

                        <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_5.php')); ?>
                        </pre>
                    </div>
                    <div class="row">
                        <h6>Executar código</h6>

                        <div class="col">

                            <div class="mb-3">
                                <label class="form-label">Texto</label>
                                <textarea id="questao_5_campo_1" class="form-control">Aqui um texto teste para o algoritmo.</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Texto</label>
                                <textarea id="questao_5_campo_2" class="form-control">texto teste</textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit" onclick="executar_ajax(5)">Executar
                                    comando
                                </button>
                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">Saída</label>
                            </div>
                            <div id="retorno_questao_5" class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <b>
                    6. Criar um algoritmo que teste se dois retângulos se sobrepõem em um plano cartesiano e calcule a
                    área do retângulo criado pela sobreposição. Deve receber como entrada dois retângulos formados por
                    pontos, ex: (0,0),(2,2),(2,0),(0,2),(1,0),(1,2),(6,0),(6,2) e gerar uma saída informando a área
                    calculada
                    ou zero se não ocorrer sobreposição.
                </b>
            </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-body">

                    <div class="row ">
                        <h6>Resposta</h6>

                        <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_6.php')); ?>
                        </pre>
                    </div>
                    <div class="row">
                        <h6>Executar código</h6>

                        <div class="col">

                            <div class="mb-3">
                                <label class="form-label">Retangulo 1</label>
                                <input type="text" id="questao_6_campo_1" value="(0,0),(2,2),(2,0),(0,2)"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Retangulo 2</label>
                                <input type="text" id="questao_6_campo_1" value="(1,0),(1,2),(6,0),(6,2)"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit" onclick="executar_ajax(6)">Executar
                                    comando
                                </button>
                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">Saída</label>
                            </div>
                            <div id="retorno_questao_6" class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <b>
                    7. Um algoritmo deve armazenar o mapa abaixo e listar os caminhos entre os pontos A e E.
                </b>
            </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-body">

                    <div class="row ">
                        <h6>Resposta</h6>

                        <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_7.php')); ?>
                        </pre>
                    </div>
                    <div class="row">
                        <h6>Executar código</h6>

                        <div class="col">

                            <div class="mb-3">
                                <label class="form-label">Campo 1</label>
                                <input type="text" id="questao_7_campo_1" value=""
                                       placeholder=""
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Campo 2</label>
                                <input type="text" id="questao_7_campo_2" value="2" placeholder="2"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit" onclick="executar_ajax(7)">Executar
                                    comando
                                </button>
                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">

                                <label class="form-label">Saída</label>
                            </div>
                            <div id="retorno_questao_7" class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                <b>
                    <h6>Programação orientada à objetos e design patterns</h6>
                    Implementar o padrão iterator no modelo abaixo. Apresentar o diagrama de classes e pseudocódigo.
                </b>
            </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-body">

                    <div>
                        <h6>Diagrama de classes</h6>

                        <img src="src/diagrama_de_classes.png" height="300" width="500">
                        <div class="row ">
                            <h6>Pseudocódigo</h6>

                            <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_8.php')); ?>
                        </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                <b>
                    Sql modelo relacional
                </b>
            </button>
        </h2>
        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-body">

                    <div>
                        <h6>ER</h6>

                        <img src="src/er.png" height="300" width="500">
                        <img src="src/cardinalidades.png" height="300" width="500">

                        <div class="row ">

                            <pre class="text-primary">
                            <?php echo str_replace('<?php', '', file_get_contents('src/resposta_questao_9.sql')); ?>
                        </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

<script type="text/javascript">
    function executar_ajax(questao) {

        var dadosajax = {
            'questao_1_campo_1': $("#questao_1_campo_1").val(),
            'questao_1_campo_2': $("#questao_1_campo_2").val(),

            'questao_2_campo_1': $("#questao_2_campo_1").val(),

            'questao_3_campo_1': $("#questao_3_campo_1").val(),
            'questao_3_campo_2': $("#questao_3_campo_2").val(),

            'questao_4_campo_1': $("#questao_4_campo_1").val(),
            'questao_4_campo_2': $("#questao_4_campo_2").val(),
            'questao_4_campo_3': $("#questao_4_campo_3").val(),
            'questao_4_campo_4': $("#questao_4_campo_4").val(),
            'questao_4_campo_5': $("#questao_4_campo_5").val(),
            'questao_4_campo_6': $("#questao_4_campo_6").val(),

            'questao_5_campo_1': $("#questao_5_campo_1").val(),
            'questao_5_campo_2': $("#questao_5_campo_2").val(),

            'questao_6_campo_1': $("#questao_6_campo_1").val(),
            'questao_6_campo_2': $("#questao_6_campo_2").val(),

        };

        pageurl = 'src/resposta_questao_' + questao + '.php';

        $.ajax({

            //url
            url: pageurl,
            //parametros
            data: dadosajax,
            //tipo: POST ou GET
            type: 'POST',
            //cache
            cache: false,
            //se ocorrer um erro na chamada ajax, retorna este alerta
            error: function () {
                alert('Erro: Ao executar!!');
            },
            //retorna o resultado
            success: function (result) {
                $('#retorno_questao_' + questao).text(result);
                //alert(result);
            }
        });
    }
</script>
</body>
</html>


</html>