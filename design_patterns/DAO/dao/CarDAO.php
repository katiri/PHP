<?php
    include_once('./models/Car.php');

    // Classe que manipula as operações do banco de dados
    class CarDAO implements CarDAOInterface{
        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function findAll(){
            $stmt = $this->conn->prepare("SELECT * FROM cars_dao");
            
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function create(Car $car){
            $stmt = $this->conn->prepare("INSERT INTO cars_dao (brand, km, color) VALUES (:brand, :km, :color)");

            $stmt->bindParam(':brand', $car->getBrand());
            $stmt->bindParam(':km', $car->getKm());
            $stmt->bindParam(':color', $car->getColor());

            $stmt->execute();
        }
    }
