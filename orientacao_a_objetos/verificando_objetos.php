<?php
    // Alguns métodos para testar objetos
    
    class Humano{
        public $nome;
        public $idade;

        public function andar(){}
        public function correr(){}
    }

    $pessoa = new Humano;

    if(is_object($pessoa)){
        echo 'É um objeto <br>';
    }

    echo get_class($pessoa) . "<br>";

    if(method_exists($pessoa, 'andar')){
        echo 'O método existe no objeto <br>';
    }

    if(method_exists('Humano', 'andar')){
        echo 'O método existe na classe <br>';
    }