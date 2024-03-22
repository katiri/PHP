<?php
    $arr = ['banana', 'maça', 'abacaxi', 1, 50, 543.43, 43.5, true, false, null, [1, 3, 2], [1, 2, 3], ['1', '2']];

    function mostrarArray($array){
        foreach($array as $a){
            if(is_bool($a)){
                if($a){
                    echo 'True';
                }
                else{
                    echo 'False';
                }
            }
            else if($a === null){
                echo 'Null';
            }
            else if(is_array($a)){
                print_r($a);
            }
            else{
                echo $a;
            }
            echo "<br>";
        }
    }

    mostrarArray($arr);
    echo "<hr>";

    sort($arr);
    mostrarArray($arr);
    echo "<hr>";

    rsort($arr);
    mostrarArray($arr);
    echo "<hr>";



    // Ordenação de Arrays Associativos

    $arrAssoc = [
        'João' => 12,
        'Maria' => 19,
        'Beatriz' => 25,
        'Arthur' => 5,
        'Thiago' => 22,
    ];

    // Ordenar pelos valores do array
    print_r($arrAssoc);
    echo "<br><br>";

    asort($arrAssoc);
    print_r($arrAssoc);
    echo "<br><br>";

    arsort($arrAssoc);
    print_r($arrAssoc);
    echo "<br><br>";
    
    echo "<br>";

    // Ordenar pelas chaves do array
    print_r($arrAssoc);
    echo "<br><br>";

    ksort($arrAssoc);
    print_r($arrAssoc);
    echo "<br><br>";

    krsort($arrAssoc);
    print_r($arrAssoc);
    echo "<br><br>";