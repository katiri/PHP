<?php
    session_start();

    echo session_id() . "<br>";

    print_r($_SESSION);
?>
<a href="./index.php">Index</a>