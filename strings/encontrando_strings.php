<?php
    // Encontrando a Primeira ocorrência de uma string menor em uma string maior
    $frase = 'O rato roeu a roupa do rei de roma';

    echo strpos($frase, 'rato');
    echo "<br>";

    echo strpos($frase, 'tigres'); // Retorna false
    echo "<br>";

    // Encontrando a Última ocorrência de uma string menor em uma string maior

    echo strrpos($frase, 'ro');
    echo "<br>";

    // Escontrando o resto da string

    echo strstr($frase, 'roeu');
    echo "<br>";