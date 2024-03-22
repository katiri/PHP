<?php
    $arr = ['João', 'Maria', 'Beatriz', 'Catharina'];
    $arr2 = [3, 54, 12, 54, 12, 43];
    $arr3 = ['teste', 5.32];

    $arr_unido = array_merge($arr, $arr2, $arr3);

    echo implode('<br>', $arr_unido);