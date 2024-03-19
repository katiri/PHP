<?php
    // Serve para quando existem mais de 1 condição a ser testada
    // Ao invés de fazer vários ifs separados, junta-se em uma estrutura só

    $idade = 20;

    if($idade >= 0 && $idade < 12){
        echo 'Idade de criança';
    }
    else if($idade >= 12 && $idade < 18){
        echo 'Idade de adolescente';
    }
    else if($idade >= 18 && $idade < 65){
        echo 'Idade de adulto';
    }
    else if($idade >= 65){
        echo 'Idade de idoso';
    }
    else{
        echo 'Idade negativa';
    }