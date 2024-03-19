<?php
    // Funciona como o while, mas executa a condição antes de testar a condição a cada repetição
    
    $i = 0;
    do{
        echo "$i é menor que 10 <br>";
        $i++;
    }while($i < 10);

    // Com break
    $i = 0;
    $arr = [3, 5, 432, 54, 123, 543, 123, 341, 4231, 142, '432', 432, 41234431, 432142.4321, 324];
    do{
        echo $arr[$i];
        echo "<br>";
        if(is_string($arr[$i])){
            break;
        }
        $i++;
    }while(true);

    // Com continue e decremento
    $i = 14;
    $arr = [3, 5, 432, 54, 123, 543, 123, 341, 4231, 142, '432', 432, 41234431, 432142.4321, 324];
    do{
        if(is_string($arr[$i])){
            $i--;
            continue;
        }
        echo $arr[$i];
        echo "<br>";
        $i--;
    }while($i > 0);

    // Loop dentro de loop
    $i = 0;
    do{
        $j = 0;
        while($j < 50){
            echo "$i - $j <br>";
            $j++;
        }
        $i++;
    }while($i < 10);