<?php
    $arrAssoc = [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'manual',
        'portas' => 4,
    ];

    echo array_key_exists('portas', $arrAssoc) . "<br>";
    echo array_key_exists('rodas', $arrAssoc) . "<br>";

    echo "<hr>";

    echo isset($arrAssoc['portas']) . "<br>";
    echo isset($arrAssoc['rodas']) . "<br>";