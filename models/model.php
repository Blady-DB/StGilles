<?php

class Db {
    protected function getDb() {
        try {
            $db = new PDO("mysql:host=localhost;dbname=hospitale2n;", 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db = $db;
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
        return $db;
        }

    protected function query (string $sql) {
        $stmt = $this->getDb()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
}

class Patients extends Db {

    public function add($last, $first, $birth, $phone, $email) {
        $sql = "INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES ('$last', '$first', '$birth', '$phone', '$email')";
        return $this->query($sql);
    }

    public function modify($last, $first, $birth, $phone, $email, $id) {
        $sql = "UPDATE patients SET lastname = '$last', firstname = '$first', birthdate = '$birth', phone = '$phone', mail = '$email' WHERE id = '$id'";
        return $this->query($sql);
    }

    public function list() {
        $sql = "SELECT * FROM patients";
        return $this->query($sql)->fetchAll();
    }

    public function profile($id) {
        $sql = "SELECT * FROM patients WHERE id = $id";
        return $this->query($sql)->fetchAll();
    }

    public function listRDVPatient($id) {
        $sql = "SELECT * FROM appointments WHERE idPatients = $id";
        return $this->query($sql)->fetchAll();
    }

    public function delete($id) {
        $sql = "DELETE FROM patients WHERE id = $id";
        return $this->query($sql);
    }

}

class RDV extends Db {

    public function add($rdv, $id) {
        $sql = "INSERT INTO appointments (dateHour, idPatients) VALUES ('$rdv', '$id')";
        return $this->query($sql);
    }

    public function detail($id) {
        $sql = "SELECT * FROM appointments WHERE id = '$id'";
        return $this->query($sql)->fetch();
    }

    public function list() {
        $sql = "SELECT * FROM patients INNER JOIN appointments WHERE patients.id = appointments.idPatients";
        return $this->query($sql)->fetchAll();
    }

    public function modify($rdv, $id) {
        $sql = "UPDATE appointments SET dateHour = '$rdv' WHERE id = '$id'";
        return $this->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM appointments WHERE id = $id";
        return $this->query($sql);
    }
}