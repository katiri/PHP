<?php
    // Interface serve como um molde para a construção de uma classe
    // Se uma classe y é uma implentação de uma interface x então y tem que obrigatóriamente
    // declarar todos os métodos e propriedades da interface

    interface Caracteristicas{
        const NOME = 'João Pedro';

        public function falar();
    }

    class Humano implements Caracteristicas{
        public $idade = 22;

        // Obrigatório por ser uma implentação da interface Caracteristicas:
        public function falar(){
            echo 'Olá mundo';
        }

        // Não é obrigatório declarar as mesmas constantes e é possível acessa-las
        public function getNome(){
            echo 'Meu nome é ' . self::NOME;
        }
    }

    $joao = new Humano;

    $joao->falar();
    echo "<br>";
    
    $joao->getNome();
    echo "<br>";