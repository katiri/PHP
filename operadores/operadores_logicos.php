<?php
    // Operador E
    // Confere se duas expressões são verdadeiras e retorna verdadeira só se as duas forem
    $a = 1;
    $b = 1;
    echo $a == $b && $a === $b;
    echo "<br>";
    echo $a == $b and $a === $b;
    echo "<br>";

    // Operador OU
    // Confere se duas expressões são verdadeiras e retorna verdadeira só se pelo menos uma delas for
    $a = 1;
    $b = '1';
    echo $a == $b || $a === $b;
    echo "<br>";
    echo $a == $b or $a === $b;
    echo "<br>";

    // Operador XOR
    // Confere se duas expressões são verdadeiras e retorna verdadeira só se uma menos uma delas for, não as duas
    $a = 1;
    $b = '1';
    $c = 1;
    echo $a == $b xor $a === $b;
    echo "<br>";
    echo $a == $c xor $a === $c;
    echo "<br>";

    // Operador NÂO
    // Inverte o valor booleano, se o valor é true vira false, se é false vira true
    $a = 1;
    $b = '1';
    echo !($a === $b);
    echo "<br>";