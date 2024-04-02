<?php
    // Posso utilizar apenas um arquivo de conexão
    include_once('./conectando.php');
    echo "<hr>";

    // Escrevo a query
    $query = "SELECT * FROM itens";

    // Faço a query no banco
    $result = $conn->query($query);

    print_r($result);

    // Fecho a conexão com o banco -> Importante sempre fehcar a conecxão ao fim do programa
    $conn->close();