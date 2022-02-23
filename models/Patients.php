<?php

require_once "Db.php";

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