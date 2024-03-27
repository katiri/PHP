<?php
    // Os Cookies servem para armazenar alguns dados da conexão
    // No protocolo HTTP é feita a requisição, a conexão é estabelecida, a informação é carregada e a conexão se encerra
    // Isso faz com que caso eu vá para outra página, todas as informações da conexão anterior possam não ser as mesmas
    // Isso poderia obrigar o usuário a fazer login a cada página que visita, o que não seria bom

    // Incluindo um Cookie 
    // chave, valor, tempo de duração (opcional)
    setcookie('nome', 'João', time() + 3600); // Tempo atual mais 3600 segundos, 1 hora

    // É importante que os cookies sejam setados no topo da página, antes de qualquer conteúdo

    print_r($_COOKIE);
?>
<a href="./pagina.php">Outra página</a>