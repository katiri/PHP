<?php
    // Compara o primeiro array passado na função com os demais arrays
    // Retorna um array com os itens encontrados no primeiro que não existem nos demais

    $arr = [1, 2, 3, 4, 5];
    $arr2 = [6, 3, 'fdsa', 4, 8];

    $diff = array_diff($arr, $arr2);

    echo implode('<br>', $diff);

    echo "<hr>";

    $arr3 = ['321', 4, 8, 6];

    $diff = array_diff($arr2, $arr, $arr3);

    echo implode('<br>', $diff);