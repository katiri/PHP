<?php
    include "teste.php";
?>

<p>Após o include</p>

<p>Se o arquivo não existir, usar o método include não gera erro fatal, gera apenas um warning, que pode ser desabilitado, ocultando o erro</p>

<p>Include pode incluir tanto arquivos .html, como arquivos .php</p>

<?php
    include_once "once.html";
    
    include_once "once.html";
?>