<?php
    // Testa se uma condição é verdadeira e se sim, executa o código designado
    // Estrutura:
    // if(__CONDIÇÃO__){__CÓDIGO_DESIGNADO__}
    if(5 > 2){
        echo 'Sim, 5 é maior que 2 <br>';
    }

    if(2 >= 5){
        echo 'Não, 2 não é maior ou igual a 5, então esse código nunca vai ser executado <br>';
    }


    $a = 1;
    $b = 8;
    $c = "Sim, 5 é maior que 2 E $a é menor ou igual a $b <br>";
    if(5 > 2 && $a <= $b){
        echo $c;
    }