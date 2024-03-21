<?php
    header('Content-type: text/plain');

    // Serve para retirar tags html, isso serve em algumas situações de segurança do que é inserido no banco de dados

    $textoHtml = '<div><p>Olá mundo</p></div>';

    echo "$textoHtml \n";
    echo strip_tags($textoHtml) . "\n";