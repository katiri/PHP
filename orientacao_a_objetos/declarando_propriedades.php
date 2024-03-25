<?php
    // Propriedades são báiscamente variável dentro da class
    // Propriedades tem uma característica nas classes que é sua privacidade

    // Variáveis publicas podem ser acessadas fora do escopo da classe por meio de um objeto

    class Car{
        public $rodas = 4;
        public $aro = 20;
        public $cor = 'Vermelha'; // Esses valores, são os valores padrão e podem ser alterados
        public $marca; // Não necessáriamente precisa ter um valor padrão
    }

    $ferrari = new Car;

    echo $ferrari->rodas . "<br>";
    echo $ferrari->aro . "<br>";

    $ferrari->cor = 'Azul';
    echo $ferrari->cor . "<br>";

    $ferrari->marca = 'Ferrari';

    echo $ferrari->marca . "<br>";