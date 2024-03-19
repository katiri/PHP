<?php
    // Serve para executar um código caso a condição testada no if seja false
    // Estrutura:
    // if(__CONDIÇÃO__){__CÓDIGO_DESIGNADO__}else{__CÓDIGO_DESIGNADO_SE_FALSO__}

    $nome1 = 'João';
    $nome2 = 'Maria';

    if($nome1 == $nome2){
        echo "$nome1 e $nome2 são iguais";
    }
    else{
        echo "$nome1 e $nome2 não são iguais";
    }
