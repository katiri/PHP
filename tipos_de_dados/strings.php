<?php
    echo "Texto com aspas duplas";
    echo "<br>";

    echo 'Texto com aspas simples';
    echo '<br>';

    echo "Posso usar 'aspas simples' dentro de uma string que está em aspas duplas";
    echo '<br>';

    echo 'O "contrário" também pode acontecer';
    echo '<br>';

    $idade = 15;

    echo "Ele tem $idade anos"; // Com aspas duplas é possível interpretar variáveis
    echo '<br>';

    echo 'Ele tem $idade anos'; // Com aspas simples não é possível interpretar variáveis
    echo '<br>';

    $texto = 'Texto';
    $text_idade = "Idade: $idade";

    if(is_string($idade)){
        echo 'É string';
    }
    else{
        echo 'Não é string';
    }