<?php
    // A função instanceof, testa se algum objeto é instância de uma determinada classe

    class Pessoa{
        public function falar(){
            echo "Olá mundo!";
        }
    }

    class Programador extends Pessoa{}

    $joao = new Programador;
    echo $joao->falar() . "<br>";

    if($joao instanceof Pessoa){
        echo 'João é uma pessoa <br>';
    }
    else{
        echo 'João não é uma pessoa <br>';
    }

    if($joao instanceof Programador){
        echo 'João é um programador <br>';
    }
    else{
        echo 'João não é um programador <br>';
    }



    $beatriz = new Pessoa;
    echo $beatriz->falar() . "<br>";

    if($beatriz instanceof Pessoa){
        echo 'Beatriz é uma pessoa <br>';
    }
    else{
        echo 'Beatriz não é uma pessoa <br>';
    }

    if($beatriz instanceof Programador){
        echo 'Beatriz é uma programadora <br>';
    }
    else{
        echo 'Beatriz não é uma programadora <br>';
    }