<?php
    // Herança em Orientação a Objetos é a capacidade de uma classe herdar propriedades e métodos de outra classe

    class Pessoa{
        public $idade = 22;

        public function falar(){
            echo "Olá mundo!";
        }

        private $altura = 1.73; // Não vai ser herdade

        protected $peso = 98.0; // Vai ser herdado
    }

    class Programador extends Pessoa{
        public function getPeso(){
            return $this->peso;
        }

        // public function getAltura(){
        //     return $this->altura;
        // }
    }

    $joao = new Programador;

    echo $joao->idade . "<br>";
    // echo $joao->altura . "<br>"; // Não foi herdado
    // echo $joao->getAltura() . "<br>"; // Não foi herdado
    echo $joao->getPeso() . "<br>";

    echo $joao->falar() . "<br>";