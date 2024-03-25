<?php
    // Valores constantes
    // São como as variáveis, porem não podem ter seu valor alterado

    class Humano{
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function membros(){
            echo self::BRACOS + self::PERNAS;
        }
    }

    $joao = new Humano;

    echo $joao::OLHOS . "<br>";

    echo $joao->membros() . "<br>";