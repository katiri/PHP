<?php
    include_once('./conectando.php');
    echo "<hr>";

    $id = 3;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

    $stmt->bind_param('i', $id);

    $stmt->execute();

    $result = $stmt->get_result();

    $item = $result->fetch_assoc();

    print_r($item);

    $conn->close();