<?php
    $url = 'http://localhost/projects/Aprendizado/Curso%20Udemy/strings/encontrando_strings.php?teste=1&var=3213131fdasfa321';

    $d_url = parse_url($url);

    print_r($d_url);