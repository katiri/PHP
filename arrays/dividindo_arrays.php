<?php
    $arr = range(1, 20);

    print_r(array_chunk($arr, 4));
    echo "<br>";

    print_r(array_chunk($arr, 2));
    echo "<br>";
    
    print_r(array_chunk($arr, 3));
    echo "<br>";