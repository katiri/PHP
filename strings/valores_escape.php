<?php
    header('Content-type: text/plain'); // Faz com que o conteúdo não seja interpretado como html e sim como texto simples

    // usando a barra invertida eu cosigo usar alguns valores de scape \

    echo "Pulando linha \n";
    echo "Usando o caractere de barra invertida \\ \n";
    echo "Usando \$dolar como caractere e não variável \n";
    echo "Usando o tab \t por texto";

    // Existem vários outros escapes que podem ser encontrados na documentação do PHP