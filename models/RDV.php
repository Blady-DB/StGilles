<?php

require_once "Db.php";

class RDV extends Db {

    public function add($rdv, $id) {
        $sql = "INSERT INTO appointments (dateHour, idPatients) VALUES ('$rdv', '$id')";
        return $this->query($sql);
    }

    public function detail($id) {
        $sql = "SELECT * FROM appointments WHERE id = '$id'";
        return $this->query($sql)->fetchAll();
    }

    public function list() {
        $sql = "SELECT * FROM patients INNER JOIN appointments WHERE patients.id = appointments.idPatients";
        return $this->query($sql)->fetchAll();
    }

    public function modify($rdv, $id) {
        $sql = "UPDATE appointments SET dateHour = '$rdv' WHERE appointments.id = '$id'";
        $this->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM appointments WHERE appointments.id = $id";
        return $this->query($sql);
    }
}