<?php
    // Funciona como um laço de repetição orientado a um Array

    $nomes = ['João', 'Diogo', 'Catharina', 'José', 'Fernanda'];

    foreach($nomes as $nome){
        echo "O nome do índice atual é $nome <br>";
    }

    // Array associativo

    $arrAssoc = [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'manual',
        'portas' => 4,
    ];

    foreach($arrAssoc as $key => $value){
        echo "$key - $value <br>";
    }
