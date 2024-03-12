<?php
    $x = 5;

    echo "$x <br>";

    $y =& $x;
    // Isso liga $x e $y de tal forma que se eu mudar o valor de qualquer uma delas após essa linha, o valor da outra também vai mudar
    // isso por que elas estão apontando para o mesmo local na memória

    echo "$y <br>";

    $y = 4;

    echo "$x $y <br>";