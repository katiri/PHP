<?php
    $pessoa = [
        'João Pedro',
        22,
        'Programador',
    ];

    list($nome, $idade, $profissao) = $pessoa;

    echo $nome . "<br>";
    echo $idade . "<br>";
    echo $profissao . "<br>";