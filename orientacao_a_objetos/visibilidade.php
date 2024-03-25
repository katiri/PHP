<?php
    // Visibilidade se refere a privacidade de variáveis e métodos
    // public pode ser acessada de qualquer maneira no código
    // protected pode ser acessada apenas pela classe de origem ou as que recebem a mesma herança
    // private pode ser acessada apenas pela classe que foi criada

    class Car{
        public $rodas = 4;
        private $vidro = 'Sem pelicula';
        protected $portas = 4;

        public function alterarVidro(){
            $this->vidro = 'G20';
            return $this->vidro;
        }

        public function getPortas(){
            return $this->portas;
        }
    }

    class Mecanico{
        public function alterarRodas($obj){
            $obj->rodas = 10;
        }

        // public function alterarVidro($obj){
        //     $obj->vidro = 'G20'; // Não funciona por que a proprieade vidro é privada
        // }
    }

    $carro = new Car;

    echo "Numero de rodas: " . $carro->rodas . "<br>";
    // echo "Vidro: " . $carro->vidro . "<br>"; // Não funciona por que a proprieade vidro é privada

    
    $joao = new Mecanico;

    $joao->alterarRodas($carro);
    echo "Numero de rodas: " . $carro->rodas . "<br>";
    
    // $joao->alterarVidro($carro); // Não funciona por que a proprieade vidro é privada
    // echo "Numero de rodas: " . $carro->vidro . "<br>"; // Não funciona por que a proprieade vidro é privada

    echo "Vidro: " . $carro->alterarVidro() . "<br>";

    // echo "Portas: " . $carro->portas . "<br>"; // Não funciona por que a proprieade portas é protected
    echo "Portas: " . $carro->getPortas() . "<br>";