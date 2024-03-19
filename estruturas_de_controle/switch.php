<?php
    // É uma estrutura que em alguns casos pode substituir as estruturas if
    $semaforo = 0;

    switch($semaforo){
        case 0:
            echo 'O sinal está vermelho';
            break; // Para o switch
        case 1:
            echo 'O sinal está amarelo';
            break;
        case 2:
            echo 'O sinal está verde';
            break;
        default: // Se nenhum caso se aplicar
            echo 'O sinal não está funcionando direito';
    }
