<?php
    // As Session também servem para armazenar informações que precisam persistir no site
    // Funciona com alguns recursos dos cookies, mas caso os cookies estejam desabilitados no navegador, a informação é propagada por URL
    // Por funcionar básicamente de qualquer maneira, é mais utilizado que o Cookie

    // As Sessions são salvas em arquivos no computador que estamos ou no servidor da aplicação
    // O caminho para onde esses arquivos são salvos está em session.save_path no ini.php

    // Assim como os cookies, as sessions tem que se iniciar no topo da página

    // Iniciando uma session
    session_start();

    // Criando variáveis de sessão
    $_SESSION['nome'] = 'João';

    // Cookies que são criados quando uma sessão é criada
    echo $_COOKIE['PHPSESSID'] . "<br>";
    echo session_id() . "<br>";

    // Array das variáveis de sessão
    print_r($_SESSION);
?>
<a href="./pagina.php">Outra página</a>