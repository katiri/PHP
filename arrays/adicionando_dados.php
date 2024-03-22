<?php
    $arr = [];

    print_r($arr);
    echo "<br>";


    // Adicionando valores
    $arr[1] = 10;
    
    print_r($arr);
    echo "<br>";


    $arr[2] = 50;
    
    print_r($arr);
    echo "<br>";


    $arr[5] = 50;
    
    print_r($arr);
    echo "<br>";


    $arr[] = 6000; // Sem indice o valor é adicionado ao final do array
    
    print_r($arr);
    echo "<br>";


    // Modificando valores
    $arr[1] = 4000;
    
    print_r($arr);
    echo "<br>";

    echo "<hr>";

    // Arrays Associativos
    $arrAssoc = [];

    print_r($arrAssoc);
    echo "<br>";


    $arrAssoc['carro'] = 'BMW';
    
    print_r($arrAssoc);
    echo "<br>";


    $arrAssoc['barco'] = 'Bote';
    
    print_r($arrAssoc);
    echo "<br>";


    $arrAssoc['carro'] = 'Ferrari';
    
    print_r($arrAssoc);
    echo "<br>";