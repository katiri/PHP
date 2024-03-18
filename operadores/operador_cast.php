<?php
    // Converte o tipo da variável
    $a = (int) '14';
    echo $a;
    echo "<br>";
    echo gettype($a);
    echo "<br>";

    $a = (float) '14';
    echo $a;
    echo "<br>";
    echo gettype($a);
    echo "<br>";

    $a = (bool) 1;
    echo $a;
    echo "<br>";
    echo gettype($a);
    echo "<br>";