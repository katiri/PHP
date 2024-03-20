<?php
    // O retorno de uma função é como o resultado final de uma função
    // Normalmente o objetivo de uma função não é imprimir algo na tela e sim realizar uma operação e retornar um resultado
    // Esse resultado pode ser exibido fora da função ou usado pra outras finalidades

    function soma($n1, $n2){
        $soma = $n1 + $n2;
        return $soma;
    }

    echo soma(1, 2);
    echo "<br>";

    $s = soma(50, 34);

    echo "$s <br>";
    echo gettype($s);
    echo "<br>";

    echo soma($s, 100);