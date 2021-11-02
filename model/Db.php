<?php

// Cette class contient les données de connexion à la base de données et centralise toutes les méthodes qui seront utilisées partout

class Db {
    // Affectation des variables pour la PDO (connexion à la base de données)
    private $servername = "localhost";
    private $dbname = "hospitale2n";
    private $username = "root";
    private $password = "";
    public $conn;
    public $result;

    // Fonction permettant d'avoir la connexion à la BDD
    protected function getConn() {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn = $conn; 
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
    
    protected function query(string $sql) {
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}