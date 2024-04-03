<?php
    include_once('./conectando.php');

    $nome = 'Mochila';
    $descricao = 'Mochila preta com dois compartimentos';

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);

    $stmt->execute();

    // Fecha a conexão
    $conn = null;