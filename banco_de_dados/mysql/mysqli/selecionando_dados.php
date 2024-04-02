<?php
    include_once('./conectando.php');
    echo "<hr>";
    
    $query = "SELECT * FROM itens";
    $result = $conn->query($query);

    $conn->close();

    // Uma vez que um méodo fetch é usado em uma query de select, os itens são retirados dessa query
    // Ou seja, na segunda vez que eu usar um método fetch na mesma query, alguns itens já vão ter sido retirados
    
    // $itens = $result->fetch_all();
    // print_r($itens);
    // echo "<br>";

    $itens = $result->fetch_all(MYSQLI_ASSOC); // Resultados com arrays associativos
    print_r($itens);
    echo "<br><br>";

    foreach($itens as $item){
        print_r($item);
        echo "<br>";
    }