<?php
    include_once('./conectando.php');
    echo "<hr>";

    // Essa mudança no fluxo de insersão de dados evita práticas como SQL injection
    // Pesquisar mais sobre o assunto

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    $nome = "Vaso";
    $descricao = "Vaso de flores dourado"; // Esses poderiam ser imputs de usuários maliciosos

    $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double
    // "ss" por que stou inserindo 2 strings

    $stmt->execute();