<?php
    include_once('./conectando.php');
    echo "<hr>";

    $nome = 'Mochila';

    $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");
    
    $stmt->bind_param('s', $nome);

    $stmt->execute();

    if($stmt->error){
        echo "Erro: " . $stmt->error;
    }

    $conn->close();