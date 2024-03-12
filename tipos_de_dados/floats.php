<?php
    $a = 1.12; // Float são números quebrados, separados por .

    echo $a;
    echo '<br>';

    echo 1,123; // Não é float
    echo '<br>';

    echo 12.5 + 1.3278;
    echo '<br>';

    echo 12 + 1.3278;
    echo '<br>';

    $teste = 10.0; // É float
    // $teste = 10; // Não é float

    if(is_float($teste)){
        echo 'É float <br>';
    }
    else{
        echo 'Não é float <br>';
    }