<?php
    $nula = null;
    // $nula = Null;
    // $nula = NULL; 

    echo $nula; // Não mostra nada
    echo '<br>';

    if($nula){
        echo 'null é considerado verdadeiro';
        echo '<br>';
    }
    else{
        echo 'null é considerado falso';
        echo '<br>';
    }

    if(is_null($nula)){
        echo 'O valor é nulo';
        echo '<br>';
    }