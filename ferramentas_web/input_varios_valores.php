<?php
    // Alguns campos dos formulários HTML podem receber vários valores, como um checkbox, ou um select multiple
    // Nesses cassos o atrubuto 'name' desses campos deve receber uma sintaxe de 'nomeCampo[]' com as chaves no final
    // Isso garante que a variável $_POST vai receber os valores desses campos como arrays com os valores preenchidos

    print_r($_POST);
    echo "<hr>";
?>
<!DOCTYPE html>
<html lang="pt-bt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aprendendo o GET com PHP</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="checkbox" name="checkbox[]" value="1"> 1 <br>
            <input type="checkbox" name="checkbox[]" value="2"> 2 <br>
            <input type="checkbox" name="checkbox[]" value="3"> 3 <br>
            <input type="checkbox" name="checkbox[]" value="4"> 4 <br>
            <input type="checkbox" name="checkbox[]" value="5"> 5 <br>

            <br>

            <select name="select[]" multiple style="width: 100px; height: 150px;">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>