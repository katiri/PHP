<?php
    include_once('./conectando.php');

    $nome = 'Mochila';

    $stmt = $conn->prepare("DELETE FROM itens WHERE nome = :nome");
    
    $stmt->bindParam(':nome', $nome);
    
    $stmt->execute();
    
    $conn = null;