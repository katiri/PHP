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
    echo "<br>";


    // Retornando vários valores
    function randomPessoa(){
        $nomes = ['João', 'Diogo', 'Fernanda', 'José', 'Catharina', 'Thiago', 'Beatriz', 'Pedro'];

        $nome = $nomes[rand(0, count($nomes) - 1)];

        $idade = rand(0, 60);
        $altura = rand(0, 2);

        return [$nome, $idade, $altura, 'Humano'];
    }

    $pessoa = randomPessoa();

    echo $pessoa[0] . " tem " . $pessoa[1] . " anos de idade, " . $pessoa[2] . " m de altura e é " . $pessoa[3] . "<br>";