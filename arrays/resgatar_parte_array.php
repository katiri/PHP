<?php
    $arr = [4, 54, 2, 55, 32, 31, 6, 43, 13, 65, 1];

    // Parametros: array, posição em que quer começar a recortar, quantidade de elementos que quer recortar
    $slice = array_slice($arr, 2, 5);

    print_r($slice);

    echo "<hr>";

    
    // Pega todos os elementos após o que está na posição 5
    $slice = array_slice($arr, 5);

    print_r($slice);

    echo "<hr>";
    
    // Pega todos os elementos após o que está na posição 4, menos os últimos 3
    $slice = array_slice($arr, 4, -3);

    print_r($slice);

    echo "<hr>";