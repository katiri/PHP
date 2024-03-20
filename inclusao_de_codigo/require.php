<?php
    require "teste.php";
?>

<p>Após o require</p>

<p>Se o arquivo não existir, usar o método require gera erro fatal, parando a aplicação</p>

<p>Require pode incluir tanto arquivos .html, como arquivos .php</p>

<?php
    require_once "once.html";

    require_once "once.html";
?>