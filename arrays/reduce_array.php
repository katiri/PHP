<?php
    // O reduce serve para processar um array por meio de uma função específicada e retornar um valor único a partir dele

    // Exemplo, somar todos os itens de um array
    $arr = range(1, 5);

    print_r($arr);
    echo "<hr>";

    function soma($a, $b){
        return $a + $b;
    }

    echo array_reduce($arr, 'soma') . "<br>";