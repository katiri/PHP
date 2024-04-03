<?php
    include_once('./conectando.php');
    echo "<hr>";

    // Essa mudança no fluxo de insersão de dados evita práticas como SQL injection
    // Pesquisar mais sobre o assunto

    $id_min = 1; // Esse poderia ser um dado que veio do banco, como imput de algum usuário malicioso

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

    $stmt->bind_param("i", $id_min); // s = string, i = integer, d = double
    // "i" por que stou inserindo 1 int

    $stmt->execute();



    $result = $stmt->get_result();

    $itens = $result->fetch_all(MYSQLI_ASSOC); // Resultados com arrays associativos

    foreach($itens as $item){
        print_r($item);
        echo "<br>";
    }

    $conn->close();