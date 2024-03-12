<?php
    $a = [1, 2, 3];

    // echo $a; // Não funciona
    print_r($a);
    echo '<br>';

    // Estou escolhendo um item do array, onde 0 é a posição do item dentro do array, 
    // e a posição varia de 0 até o número de objetos dentro do array - 1
    echo $a[0];
    echo '<br>';

    $b = ['Teste', 1, false, [1, 2, 3]]; // Arrays aceitam todos os tipos de dados, até outros arrays

    print_r($b);
    echo '<br>';

    // Acessando arrays dentro de arrays
    echo $b[3][2];
    echo '<br>';

    // Array associativo (como os dicionários do python)
    $c = [
        'nome' => 'João',
        'idade' => 22,
        0 => True,
        1 => [1, 2, 3],
    ];

    print_r($c);
    echo '<br>';

    echo $c['nome'];
    echo '<br>';
    echo $c['idade'];
    echo '<br>';
    echo $c[0];
    echo '<br>';
    echo $c[1][1];
    echo '<br>';