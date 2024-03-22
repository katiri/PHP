<?php
    $arr = ['banana', 'maça', 'abacaxi', 1, 50, 543.43, 43.5, true, [1, 3, 2]];

    $arrRev = array_reverse($arr);

    print_r($arr);
    echo "<br>";
    print_r($arrRev);
    echo "<br>";
    
    echo "<hr>";

    // Array associativo

    $arrAssoc = [
        'João' => 12,
        'Maria' => 19,
        'Beatriz' => 25,
        'Arthur' => 5,
        'Thiago' => 22,
    ];

    $arrAssocRev = array_reverse($arrAssoc);

    print_r($arrAssoc);
    echo "<br>";
    print_r($arrAssocRev);
    echo "<br>";