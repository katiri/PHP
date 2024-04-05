<?php
    $host = 'localhost';
    $db_name = 'db_curso_php';
    $user = 'root';
    $password = '';

    $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);