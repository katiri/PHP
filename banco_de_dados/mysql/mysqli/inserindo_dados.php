<?php
    include_once('./conectando.php');
    echo "<hr>";
    
    $query = "INSERT INTO itens (nome, descricao) VALUES ('Caneta', 'Caneta Bic azul')";
    $result = $conn->query($query);

    $conn->close();