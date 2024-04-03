<?php
    // Lembre que para utilizar o PDO, você tem que verificar se a extensão correta está habilitada em php.ini

    // Para conectar a um banco de dados com PDO precisamos das seguinte informações:
    $db_type = 'mysql'; // Qual o banco de dados que vamos utilizar
    $host = 'localhost'; // Servidor no qual o banco está rodando
    $db_name = 'db_curso_php'; // Nome do banco de dados que vai ser acessado
    $user = 'root'; // Usuário utilizado para acesso
    $password = ''; // Senha do usuário
    
    // Criando a conexão
    $conn = new PDO("$db_type:host=$host;dbname=$db_name", $user, $password);