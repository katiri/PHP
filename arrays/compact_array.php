<?php
    $marca = 'BMW';
    $motor = '2.4';
    $teto_solar = true;
    $cambio = 'manual';
    $portas = 4;

    $arrAssoc = compact('marca', 'motor', 'teto_solar', 'cambio', 'portas');

    print_r($arrAssoc);