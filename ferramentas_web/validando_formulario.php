<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Validando dados:
        // Nome tem que ser uma string
        if(!is_string($nome)){
            echo "Não foi possível realizar a operação por que o nome não é uma string <br>";
        }

        // A idade tem que ser maior ou igual a 18
        if($idade < 18){
            echo "Não foi possível realizar a operação por que você é menor de idade <br>";
        }

        // E-mail tem que ser gmail
        if(!strpos($email, '@gmail')){
            echo "E-mail inválido, não é gmail <br>";
        }

        // Senha tem que ter pelo menos 8 caracteres
        if(strlen($senha) < 8){
            echo "Senha inválida, tem menos de 8 caracteres <br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-bt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validando os dados de um formulário</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="number" name="idade" placeholder="Idade"><br>

            <input type="email" name="email" placeholder="E-mail"><br>
            <input type="password" name="senha" placeholder="Senha"><br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>