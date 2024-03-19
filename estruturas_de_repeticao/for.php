<?php
    // For vai executar um bloco de código quantas vezes for necessário enquanto uma certa condição for verdadeira

    for($i = 0; $i < 10; $i++){
        echo "$i é menor que 10 <br>";
    }

    // Com break
    $arr = [3, 5, 432, 54, 123, 543, 123, 341, 4231, 142, '432', 432, 41234431, 432142.4321, 324];
    for($i = 0; true; $i++){
        echo $arr[$i];
        echo "<br>";
        if(is_string($arr[$i])){
            break;
        }
    }

    // Com continue e decremento
    $arr = [3, 5, 432, 54, 123, 543, 123, 341, 4231, 142, '432', 432, 41234431, 432142.4321, 324];
    for($i = 14; $i > 0; $i--){
        if(is_string($arr[$i])){
            continue;
        }
        echo $arr[$i];
        echo "<br>";
    }

    // Loop dentro de loop
    $i = 0;
    for($i = 0; $i < 10; $i++){
        for($j = 0; $j < 50; $j++){
            echo "$i - $j <br>";
        }
    }