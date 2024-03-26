<?php
    $data = new DateTime();

    print_r($data);
    echo "<br>";

    // Formatando a saída de data
    echo $data->format('d/m/Y h:i:s') . "<br>";

    // Modificando a data com base em uma string
    $data->modify('+20 hours');
    echo $data->format('d/m/Y h:i:s') . "<br>";

    // Modificando a data diretamente para uma data nova
    $data->setDate(2020, 3, 30);
    echo $data->format('d/m/Y h:i:s') . "<br>";

    // Modificando a hora diretamente para uma hora nova
    $data->setTime(23, 50, 32);
    echo $data->format('d/m/Y h:i:s') . "<br>";
