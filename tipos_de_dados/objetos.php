<?php
    // Objetos são declarados como classes
    class Pessoa {
        public $nome; // Declara uma característica do objeto pessoa

        // Declara uma função do objeto pessoa
        function falar(){
            echo 'Olá pessoal';
        }
    }

    // Instanciando uma pessoa
    $joao = new Pessoa();
    $joao->nome = 'João'; // Atribuindo uma característica a essa pessoa

    echo $joao->nome;
    echo '<br>';

    $joao->falar(); // Chamando uma função dessa pessoa