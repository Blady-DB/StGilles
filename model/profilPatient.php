<?php

require "Db.php";

class profilPatient extends Db {

    public function profilUser($get) {
        $sql = "SELECT * FROM patients WHERE id = $get";
        return $this->query($sql);
    }

    public function listRDVPatient($get) {
        $sql = "SELECT * FROM appointments WHERE idPatients = $get";
        return $this->query($sql);
    }
}