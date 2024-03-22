<?php
    // Cria variáveis a partir de um array associativo
    // O nome da variável criada será o nome da chave
    // Se já existir uma variável com esse nome a mesma será sobrescrita

    $marca = 'Ferrari';
    echo $marca . "<hr>";

    $arrAssoc = [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'manual',
        'portas' => 4,
    ];

    extract($arrAssoc);

    echo $marca . "<br>";
    echo $motor . "<br>";
    echo $cambio . "<br>";
    echo $portas . "<br>";