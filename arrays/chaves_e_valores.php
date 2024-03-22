<?php
    $arrAssoc = [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'manual',
        'portas' => 4,
    ];

    $chaves = array_keys($arrAssoc);
    $valores = array_values($arrAssoc);

    print_r($chaves);
    echo "<hr>";
    print_r($valores);
