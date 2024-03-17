<?php
    // Escopo local
    // Variáveis de escopo local são aquelas que são definidas dentro de funções e só funcionam dentro delas
    // Se eu declarar duas variáveis com nomes iguais em funções diferentes, as duas não serão a mesma variável
    // Sempre que a função é chamada o valor da variável é resetado, ela não se mantém

    $x = 10;
    
    
    function teste() {
        $x = 5;

        echo "$x local <br>";
    }

    teste();


    function testando() {
        $x = 12;

        echo "$x local 2 <br>";
    }

    testando();


    echo "$x global <br>";

    $x = 100;
    
    echo "$x global 2 <br>";

    // Escopo global
