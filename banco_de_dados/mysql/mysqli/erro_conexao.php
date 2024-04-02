<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = '_curso_php'; 
    
    $conn = new mysqli($host, $user, $password, '_curso_php');

    // Isso serve para o caso de os erros padrão do PHP não estiverem habilitados
    if($conn2->connect_errno){
        echo 'Erro na conexão <br>';
        echo 'Erro: ' . mysqli_connect_error() . '<br>';
        echo 'Erro: ' . $conn2->connect_error . '<br>';
    }