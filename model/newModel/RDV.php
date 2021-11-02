<?php

require "Db.php";

class RDV extends Db {

    public function detail($id) {
        $sql = "SELECT * FROM appointments WHERE id = '$id'";
        return $this->query($sql);
    }

    public function list() {
        $sql = "SELECT * FROM appointments";
        return $this->query($sql);
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