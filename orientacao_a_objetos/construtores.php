<?php
    // Serve para que na hora de instanciar um objeto, sejam passados alguns paramêtros que serão propriedades do objeto

    class Car{
        public $marca;
        public $cor;
        public $portas;
        public $teto_solar;

        function __construct($marca, $cor, $portas, $teto_solar){
            $this->marca = $marca;
            $this->cor = $cor;
            $this->portas = $portas;
            $this->teto_solar = $teto_solar;
        }

        public function ficha(){
            echo '<h3>Ficha do Carro</h3><br>';
            echo 'Marca: ' . $this->marca . '<br>';
            echo 'Cor: ' . $this->cor . '<br>';
            echo 'nº portas: ' . $this->portas . '<br>';
            echo 'Teto solar: ';
            echo $this->teto_solar ? 'Sim' : 'Não';
            echo '<br>';
        }
    }

    $carro = new Car('Ferrari', 'Vermelha', 4, true);
    $carro->ficha();