<?php
    $str = 'O rato roeu a roupa do rei de roma';

    echo "$str <br>";

    // Corta a string em toda posição que encontrar um espaço vazio
    print_r(explode(' ', $str));

    echo "<br><br>";

    $str2 = '1,2,3,4,5,6,7,8,9,10';

    echo "$str2 <br>";

    // Corta a string em toda posição que encontrar uma ,
    print_r(explode(',', $str2));

    echo "<br><br>";
