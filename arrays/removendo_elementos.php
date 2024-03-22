<?php
    // Resgata e remove os elementos do array
    $arr = [4, 54, 2, 55, 32, 31, 6, 43, 13, 65, 1];
    
    print_r($arr);
    echo "<hr>";

    // Parametros: array, posição em que quer começar a remover, quantidade de elementos que quer remover
    $splice = array_splice($arr, 2, 5);

    print_r($arr);
    echo "<br>";
    print_r($splice);