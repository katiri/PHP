<?php
    include_once('./conectando.php');

    // Selecionando todos os dados
    $stmt = $conn->prepare("SELECT * FROM itens");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $item){
        print_r($item);
        echo "<br>";
    }

    echo "<hr>";

    // Selecionando apenas 1 item
    $id = 3;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = :id");
    
    $stmt->bindParam(':id', $id);
    
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($result);


    
    $conn = null;