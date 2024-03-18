<?php
    // Igual a
    // Compara se um valor é igual ao outro
    $a = 5;
    $b = 5;
    $c = '5';
    echo $a == $b;
    echo "<br>";
    echo $a == $c;
    echo "<br>";

    // Idêndico a
    // Compara se um valor é idêntico a outro até no tipo
    $a = 5;
    $b = 5;
    $c = '5';
    echo $a === $b;
    echo "<br>";
    echo $a === $c;
    echo "<br>";

    // diferente de
    // Compara se um valor é diferente do outro
    $a = 5;
    $b = 6;
    $c = '7';
    echo $a != $b;
    echo "<br>";
    echo $a <> $b;
    echo "<br>";
    echo $a != $c;
    echo "<br>";

    // Não idêntico a
    // Compara se um valor não é idêntico a outro até no tipo
    $a = 5;
    $b = 6;
    $c = '5';
    echo $a !== $b;
    echo "<br>";
    echo $a !== $c;
    echo "<br>";

    // Menor que
    $a = 5;
    $b = 6;
    echo $a < $b;
    echo "<br>";

    // Maior que
    $a = 7;
    $b = 6;
    echo $a < $b;
    echo "<br>";

    // Menor ou igual a
    $a = 5;
    $b = 5;
    echo $a <= $b;
    echo "<br>";

    // Maior ou igual a
    $a = 6;
    $b = 6;
    echo $a >= $b;
    echo "<br>";