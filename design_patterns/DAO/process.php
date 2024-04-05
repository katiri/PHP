<?php
    include_once('conexao.php');
    include_once('dao/CarDAO.php');

    // Pega os valores enviados pelo formulário
    $brand = $_POST['brand'];
    $km = $_POST['km'];
    $color = $_POST['color'];

    // Cria um objeto Car e seta seus valores de acordo com os valores enviados
    $newCar = new Car();

    $newCar->setBrand($brand);
    $newCar->setKm($km);
    $newCar->setColor($color);

    // Insere um novo registro no banco baseado no objeto carro criado, usando o objeto de acesso a dados da entidade carro
    $carDAO = new CarDAO($conn);
    $carDAO->create($newCar);

    
    header('Location: index.php');