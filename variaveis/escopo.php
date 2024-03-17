<?php
    // Escopo local
    // Variáveis de escopo local são aquelas que são definidas dentro de funções e só funcionam dentro delas
    // Se eu declarar duas variáveis com nomes iguais em funções diferentes, as duas não serão a mesma variável
    // Sempre que a função é chamada o valor da variável é resetado, ela não se mantém

    $x = 10;
    
    
    function teste() {
        $x = 5;

        echo "$x local <br>";
    }

    teste();


    function testando() {
        $x = 12;

        echo "$x local 2 <br>";
    }

    testando();


    echo "$x global <br>";

    $x = 100;
    
    echo "$x global 2 <br>";
    echo "<hr>";

    // Escopo global
    // São as variáveis que são declaradas fora de funções
    // Só são acessíveis dentro de uma função por meio de um método específico

    $g = 'variavel global';

    echo "$g <br>";

    if(true){
        echo "$g dentro de um if <br>";
    }

    function funcao(){
        // echo "$g dentro da função <br>"; // Não funciona
        
        $g = 'variavel local';
        echo "$g dentro da função <br>"; // Funciona

        global $g;
        echo "$g dentro da função <br>"; // Funciona

        $g = 'variavel global alterada dentro da função';
    }

    funcao();

    echo "$g <br>";
    echo "<hr>";

    // Escopo static
    // Diferente das variaveis de escopo local, as de escopo static sempre mantém o valor atribuido a ela a cada execução da função que as envolve

    function varStatic(){
        $a = 0;
        $a++;

        static $b = 0;
        $b++;

        echo "Variavel local dentro da função: $a <br>";
        echo "Variavel static dentro da função: $b <br>";
    }

    varStatic();
    varStatic();
    varStatic();

    echo "<hr>";

    // Escopo de parâmetros de função
    // Funcionam como variáveis de escopo local

    function soma($j, $i){
        echo $j + $i;
        echo '<br>';
    }
    soma(10, 20);
    soma(1, 2);
    soma(0, -70);
    // echo $j + $i; // Dá erro