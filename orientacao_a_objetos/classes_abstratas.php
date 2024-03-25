<?php
    // Básicamente são classes que não podem ser instânciadas
    // Também temos os métodos abstratos
    // No caso de uma classe herdar uma outra classe abstrata, os métodos abstratos tem que ser implementados obrigatóriamente


    abstract class Teste{
        public static function testandoClasse(){
            echo 'Este método e de uma classe abstrata <br>';
        }

        abstract public function testeAbs();
    }

    class Nova extends Teste{
        public function testeAbs(){
            echo 'Teste método abstrato <br>';
        }
    }

    // $t = new Teste;
    // $t->testandoClasse(); // Dá erro por que Teste é abstrata e não pode ser instanciada

    Teste::testandoClasse(); // Funciona mas com um detalhe de 'plublic static function'

    $n = new Nova;
    $n->testeAbs();
    $n->testandoClasse();