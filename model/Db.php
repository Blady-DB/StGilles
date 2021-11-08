<?php

class Db {
    // Affectation des variables pour la PDO (connexion à la base de données)
    private $servername = "localhost";
    private $dbname = "hospitale2n";
    private $username = "root";
    private $password = "";

    function __construct() {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn = $conn; 
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    protected function getConn() {
        return $this->conn;
    }
    
    protected function query(string $sql) {
        $stmt = $this->getConn()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }


}