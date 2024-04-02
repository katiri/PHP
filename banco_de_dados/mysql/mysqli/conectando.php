<?php
    // Para conectar a um banco de dados com mysqli precisamos das seguinte informações:
    $host = 'localhost'; // Servidor no qual o banco está rodando
    $user = 'root'; // Usuário utilizado para acesso
    $password = ''; // Senha do usuário
    $db_name = 'db_curso_php'; // Nome do banco de dados que vai ser acessado

    // Criando a conexão
    $conn = new mysqli($host, $user, $password, $db_name);

    print_r($conn);
