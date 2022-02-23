<?php

class Db {
    protected function getDb() {
        try {
            $db = new PDO("mysql:host=localhost;dbname=test;", 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db = $db;
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
        return $db;
        }

    protected function query (string $sql) {
        $stmt = $this->getDb()->prepare($sql);
        return $stmt->execute();
    }
}