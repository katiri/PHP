<?php
    header('Content-type: text/plain');

    // Limpar a string é essencialmente tirar os espaços em branco

    // Limpa os espaços antes e depois da string

    $str1 = '    João        ';
    echo "$str1 teste de fim \n";
    echo trim($str1) . " teste de fim \n\n";

    // Limpa os espaços antes da string

    $str2 = '       Palavra                       ';
    echo "$str2 teste de fim \n";
    echo ltrim($str2) . " teste de fim \n\n";

    // Limpa os espaços depois da string

    $str3 = '       Depois                       ';
    echo "$str3 teste de fim \n";
    echo rtrim($str3) . " teste de fim \n\n";