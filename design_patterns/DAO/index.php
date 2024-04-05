<?php
    // DAO: Data Access Object
    // É um padrão de código utilizado em projetos orientados a objeto específicamente para a persistência de dados
    // Consiste na criação de duas classes para cada entidade do banco de dados:
    // Uma manipula as regras de negócio envolvidas com essa entidade
    // A outra manipula todas as interações com o banco de dados dessa entidade, persistindo as modificações feitas na outra classe
    // Serve para separar as regras de negócio da interação com o banco de dados

    include_once('conexao.php');
    include_once('dao/CarDAO.php');

    // Consulta no banco de dados quais todos os carros, por meio do objeto de acesso a dados da entidade carros
    $carDAO = new CarDAO($conn);
    $cars = $carDAO->findAll();
?>

<h1>Insira um carro</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro</label>
        <input type="text" id="brand" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="km">Kilometragem</label>
        <input type="number" id="km" name="km" placeholder="Insira a kilometragem">
    </div>
    <div>
        <label for="color">Cor do carro</label>
        <input type="text" id="color" name="color" placeholder="Insira a cor">
    </div>
    <input type="submit" value="Salvar">
</form>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Kilometragem</th>
            <th>Cor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cars as $car): ?>
            <tr>
                <td><?= $car['id'] ?></td>
                <td><?= $car['brand'] ?></td>
                <td><?= $car['km'] ?></td>
                <td><?= $car['color'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>