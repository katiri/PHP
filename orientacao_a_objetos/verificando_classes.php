<?php
    // Alguns métodos para testar classes
    
    class Humano{
        public $nome;
        public $idade;

        public function andar(){}
        public function correr(){}
    }

    if(class_exists("Humano")){
        echo 'A classe existe <br>';
    }

    print_r(get_class_vars('Humano'));
    echo "<br>";

    print_r(get_class_methods('Humano'));
    echo "<br>";