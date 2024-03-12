<?php
    echo 5; // Imprime número inteiro sem precisar das aspas
    echo '<br>';
    echo 5 + 7; //Imprime também operações matemáticas
    echo '<br>';
    echo -7; // Imprime também números negativos
    echo '<br>';

    $num_positivo = 5;
    $operacao = 5 + 7;
    $num_negativo = -7;

    echo $num_positivo; // Imprime número inteiro sem precisar das aspas
    echo '<br>';
    echo $operacao; //Imprime também operações matemáticas
    echo '<br>';
    echo $num_negativo; // Imprime também números negativos
    echo '<br>';

    $teste = 10;

    if(is_int($teste)){
        echo 'É um número inteiro <br>';
    }
    else{
        echo 'Não é um inteiro <br>';
    }