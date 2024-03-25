<?php
    // Essa funcionalidade permite o reuso de código sem que seja necessário o uso de herança

    trait Animal{
        public function falarAnimal(){
            echo 'Sou um animal <br>';
        }
    }

    trait Humano{
        public function falarHumano(){
            echo 'Sou um humano <br>';
        }
    }

    class Programador{
        use Animal;
        use Humano;
    }

    class Engenheiro{
        use Animal;
        use Humano;
    }

    $joao = new Programador;

    $joao->falarAnimal();
    $joao->falarHumano();


    $thiago = new Engenheiro;

    $thiago->falarAnimal();
    $thiago->falarHumano();