<?php
    // Case é básicamente se a string está em maiúscula ou minúscula

    $str_min = 'essa string está toda em minúsculo';

    echo "$str_min <br>";
    echo strtoupper($str_min) . "<br>";

    echo "<br>";

    $str_mai = 'ESSA STRING ESTÁ TODA EM MAIÚSCULO';

    echo "$str_mai <br>";
    echo strtolower($str_mai) . "<br>";

    echo "<br>";

    // Para alterar apenas a primeira letra da frase

    $str = 'essa string está toda em minúsculo';

    echo "$str <br>";
    echo ucfirst($str) . "<br>";

    echo "<br>";

    // Para alterar apneas a primeira letra de cada palavra da frase

    $str = 'essa string está toda em minúsculo';

    echo "$str <br>";
    echo ucwords($str) . "<br>";

    echo "<br>";