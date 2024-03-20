<?php
    // Uma função pode receber parâmetros
    // Isso serve para que a a função possa realizar uma operação com valores personalizados a cada chamada

    function parametros($valor){
        echo "O valor passado para a função é $valor <br>";
        $tipo = gettype($valor);
        echo "O valor passado é um(a) $tipo <br>";
    }

    
    parametros("Bola");
    parametros(543);
    parametros(1.65);
    parametros(true);

    // parametros(); // Isso vai gerar um erro fatal

    $coisa = 'Avião';

    parametros($coisa);

    parametros("Faca", "Garfo"); // O segundo parametro é ignorado por que ele não é solicitado na função (Isso não é muito bom)

    

    // Mais de um parametro
    function descricaoPessoa($nome, $idade, $sexo){
        echo "$nome tem $idade anos e é do sexo $sexo <br>";
    }

    descricaoPessoa('João', 22, 'Masculino');
    descricaoPessoa('Beatriz', 23, 'Feminino');



    // Parametros padrão
    function teste($a = 'Teste'){
        echo "O valor de a é: $a <br>";
    }

    teste();
    teste('João');
    teste('Diogo');


    // Uma boa prática é deixar os parametros padrão por último, se estiverem no começo e tiver um parametro obrigatório no final
    // vai dar erro se a função for chamada sem os valores, isso me obriga a passar um valor para parametros padrão que estão no começo
    function ordemParametros($a, $b = 'Último'){
        echo "Valor de a é: $a <br>";
        echo "Valor de b é: $b <br>";
    }

    ordemParametros('Primeiro');
    ordemParametros('Início', 'Final');