<?php
    // While vai executar um bloco de código quantas vezes for necessário enquanto uma certa condição for verdadeira
    
    $i = 0;
    while($i < 10){
        echo "$i é menor que 10 <br>";
        $i++;
    }

    // Com break
    $i = 0;
    $arr = [3, 5, 432, 54, 123, 543, 123, 341, 4231, 142, '432', 432, 41234431, 432142.4321, 324];
    while(true){
        echo $arr[$i];
        echo "<br>";
        if(is_string($arr[$i])){
            break;
        }
        $i++;
    }

    // Com continue e decremento
    $i = 14;
    $arr = [3, 5, 432, 54, 123, 543, 123, 341, 4231, 142, '432', 432, 41234431, 432142.4321, 324];
    while($i > 0){
        if(is_string($arr[$i])){
            $i--;
            continue;
        }
        echo $arr[$i];
        echo "<br>";
        $i--;
    }

    // Loop dentro de loop
    $i = 0;
    while($i < 10){
        $j = 0;
        while($j < 50){
            echo "$i - $j <br>";
            $j++;
        }
        $i++;
    }