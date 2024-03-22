<?php
    $arr = range(1, 20);

    print_r($arr);
    echo "<br>";

    shuffle($arr);
    print_r($arr);
    echo "<br>";

    shuffle($arr);
    print_r($arr);
    echo "<br>";
    
    echo "<hr>";

    // Array Associativo

    $arrAssoc = [
        'João' => 12,
        'Maria' => 19,
        'Beatriz' => 25,
        'Arthur' => 5,
        'Thiago' => 22,
    ];

    print_r($arrAssoc);
    echo "<br>";

    shuffle($arrAssoc);
    print_r($arrAssoc);
    echo "<br>";