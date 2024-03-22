<?php
    $arr = [
        [1, 2, 3],
        [4, 5, 6],
        [8, 7, 9],
    ];

    print_r($arr);

    echo "<br>";

    echo $arr[0][0] . "<br>";
    echo $arr[0][1] . "<br>";
    echo $arr[0][2] . "<br>";
    echo $arr[1][0] . "<br>";
    echo $arr[1][1] . "<br>";
    echo $arr[1][2] . "<br>";
    echo $arr[2][0] . "<br>";
    echo $arr[2][1] . "<br>";
    echo $arr[2][2] . "<br>";

    echo "<hr>";


    $arr2 = [
        [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ],
        [
            [10, 11, 12],
            [13, 14, 15],
            [16, 17, 18],
        ],
        [
            [19, 20, 21],
            [22, 23, 24],
            [25, 26, 27],

        ],
    ];

    print_r($arr2);