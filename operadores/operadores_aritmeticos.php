<?php
    // Operador de identidade
    // Converte valor para int ou float como apropriado
    $a = '5';
    echo gettype($a);
    echo "<br>";
    echo gettype(+$a);
    echo "<br>";

    // Operador de negação
    // Converte valor para negativo
    $a = '5';
    echo gettype($a);
    echo "<br>";
    echo -$a;
    echo "<br>";
    echo gettype(-$a);
    echo "<br>";
    
    // Operador de soma +
    $a = 5;
    $b = 2;
    $soma = $a + $b;
    echo "$soma <br>";

    // Operador de subtração -
    $a = 5;
    $b = 2;
    $subtracao = $a - $b;
    echo "$subtracao <br>";
    
    // Operador de multiplicação *
    $a = 5;
    $b = 2;
    $multiplicacao = $a * $b;
    echo "$multiplicacao <br>";

    // Operador de divisão /
    $a = 5;
    $b = 2;
    $divisao = $a / $b;
    echo "$divisao <br>";
    
    // Operador de módulo (resto da divisão) %
    $a = 5;
    $b = 2;
    $resto = $a % $b;
    echo "$resto <br>";

    // Operador de exponenciação **
    $a = 5;
    $b = 2;
    $exponenciacao = $a ** $b;
    echo "$exponenciacao <br>";