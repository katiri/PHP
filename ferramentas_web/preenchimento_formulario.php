<?php
    $usuario = [
        'nome' => 'João',
        'idade' => 22,
        'profissao' => 'Programador',
    ];
?>
<!DOCTYPE html>
<html lang="pt-bt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Como prrencher formulários com variáveis PHP</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="nome" placeholder="Nome" value="<?= $usuario['nome'] ?>" >
            <input type="number" name="idade" placeholder="Idade" value="<?= $usuario['idade'] ?>" >
            <input type="text" name="profissao" placeholder="Profissão" value="<?= $usuario['profissao'] ?>" >

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>