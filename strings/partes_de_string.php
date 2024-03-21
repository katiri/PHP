<?php
    // As vezes é necessário pegar apenas uma parte específica de uma string

    $frase = 'três pratos de trigo para três trigres tristes';

    echo "$frase <br>";
    echo "6 caracteres após a posição 6 da frase: " . substr($frase, 6, 6) . "<br>";

    // Isso pega a frase a partir da posição 5 e retira os 8 últimas caracteres
    echo "Retirando parte da string: " . substr($frase, 5, -8) . "<br>";
