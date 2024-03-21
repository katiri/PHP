<?php
    // Podemos tratar uma string como um array de caracteres, ou seja acessar as letras pelos indices:

    $str = 'Frase 1';
    echo $str[0] . '<br>';
    echo $str[1] . '<br>';
    echo $str[4] . '<br>';
    
    echo '<br>';

    // Usando o strlen e for para percorrer a string toda

    for($i = 0; $i < strlen($str); $i++){
        echo $str[$i] . '<br>';
    }