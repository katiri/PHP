<?php
    // O $this serve para acessar as propriedades ou até os métodos de um objeto instanciado dentro de outros métodos

    class Car{
        public $rodas = 4;
        public $aro = 20;
        public $cor = 'Vermelha'; // Esses valores, são os valores padrão e podem ser alterados
        public $marca; // Não necessáriamente precisa ter um valor padrão

        function definirMarca($marca){
            $this->marca = $marca;
        }

        function ficha(){
            echo "Ficha do carro <br>";
            echo "Marca: " . $this->marca . "<br>";
            echo "Cor: " . $this->cor . "<br>";
            echo "nº de rodas: " . $this->rodas . "<br>";
            echo "Aro: " . $this->aro . "<br>";
        }

        function mostrarFicha(){
            $this->ficha();
        }
    }

    $ferrari = new Car;

    $ferrari->cor = 'Azul';
    $ferrari->definirMarca('Ferrari');

    $ferrari->mostrarFicha();

