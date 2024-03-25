<?php
    class Pessoa{
        function cumprimentar(){
            echo 'Olá, tudo bem? <br>';
        }
        
        function dizerNome($nome){
            echo "Meu nome é $nome <br>";
        }

        function falar($fala){
            return "$fala <br>";
        }
    }

    $joao = new Pessoa;
    $thiago = new Pessoa;

    $joao->cumprimentar();
    $joao->dizerNome('João');
    echo $joao->falar('Qual o seu nome?');

    $thiago->dizerNome('Thiago');
    echo $thiago->falar('Tudo bem comigo sim e com você?');