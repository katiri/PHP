<?php
    print_r($_FILES);

    $nome = $_FILES["arquivo"]["name"];
	$temp = $_FILES["arquivo"]["tmp_name"];
    $size = $_FILES["arquivo"]["size"];
    $tipo = $_FILES["arquivo"]["type"];
    $erro = $_FILES["arquivo"]["error"];
    
    // Verifica a extenção do arquivo
    $ext = pathinfo($nome, PATHINFO_EXTENSION);
                
    // Define no novo nome do arquivo
    $novo_nome = 'arquivo_novo.' . $ext;
    
    // Podemos fazer um controle de extensão, para aceitar apenas algumas
    // if(($ext != "jpg") and ($ext != "png")){}
    
    // Podemos fazer um controle de taanho do arquivo
    // if($size > 100000000){}
    
    // Salvando o arquivo em uma pasta específica
    // Crie a pasta 'arquivos', no mesmo diretório desse arquivo.php
    $mover = move_uploaded_file($temp, './arquivos/'.$novo_nome);
?>

<img src="./arquivos/<?= $novo_nome ?>" width="500px">