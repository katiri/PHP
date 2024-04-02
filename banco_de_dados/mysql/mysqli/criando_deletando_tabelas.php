<?php
    include_once('./conectando.php');
    echo "<hr>";

    // Cria uma tabela
    $query = "CREATE TABLE teste (
        id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(200)
    )";
    $result = $conn->query($query);

    // Apaga a tabela
    $query = "DROP TABLE teste";
    $result = $conn->query($query);

    $conn->close();