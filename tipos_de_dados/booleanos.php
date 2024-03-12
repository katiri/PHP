<?php
    // Só podem ter dois valores: true ou false

    echo true; // Vai imprimir 1, por que o 1 também é considerado true
    echo "<br>";

    echo false; // Não imprime nada na tela

    $teste = true;
    // $teste = "dsadsa"; // Desde que exista um valor diferente de zero ou null vai ser verdadeiro
    // $teste = false; // Falso
    // $teste = 0; // Falso
    // $teste = 0.0; // Falso
    // $teste = null; // Falso
    // $teste = []; // Falso
    // $teste = "0"; // Falso
    // $teste = 5 > 4; // Verdadeiro
    // $teste = 5 < 4; // Falso

    if($teste){
        echo 'É verdadeiro';
        echo '<br>';
    }
    else{
        echo 'É falso';
        echo '<br>';
    }

    if(is_bool($teste)){
        echo 'É booleano';
        echo '<br>';
    }
    else{
        echo 'Não é booleano';
        echo '<br>';
    }