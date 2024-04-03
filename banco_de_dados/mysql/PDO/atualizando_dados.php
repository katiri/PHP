<?php
    include_once('./conectando.php');

    $id = 12;

    $nome = 'Calendário';
    $descricao = 'Calendário amarelo do Banco do Brasil';

    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    $conn = null;