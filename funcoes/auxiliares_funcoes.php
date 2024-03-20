<?php
    function teste($a, $b, $c){
        print_r(func_get_args());
        echo "<br>";

        echo func_num_args() . "<br>";
    }

    teste(43, 54, -65);