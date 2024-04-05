<?php
    // Classe que manipula as regras de negócio
    // Define e retorna as propriedades de um carro dentro do nosso código
    class Car{
        private $id;
        private $brand;
        private $km;
        private $color;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }

        public function getKm(){
            return $this->km;
        }

        public function setKm($km){
            $this->km = intval($km);
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }
    }

    // Interface para a criação de uma classe de conexão com o banco de dados para a entidade carro
    // Nesse padrão de desenvolvimento posso criar diversas classes de conexão, para diferentes bancos por exemplo
    // Por isso é importante ter uma interface que vai definir quais os métodos obrigatórios para todas as conexões com o banco
    interface CarDAOInterface{
        public function create(Car $car);
        public function findAll();
    }