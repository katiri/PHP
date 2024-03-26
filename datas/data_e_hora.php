<?php
    echo date('d/m/Y h:i:s') . "<br>";

    $dataEspecifica = mktime(10, 30, 20, 6, 12, 2001); // Hora, Minutos, Segundos, Mês, Dia e Ano

    echo date('d/m/Y h:i:s', $dataEspecifica) . "<br>";