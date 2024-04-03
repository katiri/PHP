<?php
    include_once('./conectando.php');
    echo "<hr>";

    $id = 10;
    $nome = 'Mochila';
    $descricao = 'Mochila preta com dois compartimentos';

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
    
    $stmt->bind_param('ssi', $nome, $descricao, $id);

    $stmt->execute();

    if($stmt->error){
        echo "Erro: " . $stmt->error;
    }

    $conn->close();