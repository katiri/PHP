<?php
    $method =  $_SERVER['REQUEST_METHOD'];
?>
<!DOCTYPE html>
<html lang="pt-bt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Autoprocessamento de página PHP</title>
    </head>
    <body>
        <?php if($method == 'GET'): ?>
            <form action="" method="post">
                <input type="text" name="nome" placeholder="Nome">
                <input type="number" name="idade" placeholder="Idade">

                <input type="submit" value="Enviar">
            </form>
        <?php else: ?>
            <h1>Seu nome é <?= $_POST['nome']; ?> e você tem <?= $_POST['idade']; ?></h1>
        <?php endif; ?>
    </body>
</html>