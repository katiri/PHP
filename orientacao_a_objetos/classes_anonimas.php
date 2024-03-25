<?php
    // Defini uma variável como um objeto sem declara uma classe
    // Não dá pra instanciar novos objetos a partir desse, nem pra aplicar herança

    $pessoa = new class(){
        public $nome = 'João';

        public function dizerNome(){
            echo 'Olá eu sou o ' . $this->nome . '<br>';
        }
    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();