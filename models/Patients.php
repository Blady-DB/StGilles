<?php

require "Db.php";

class Patients extends Db {

    public function list() {
        $sql = "SELECT * FROM patients";
        return $this->query($sql);
    }

    public function profile($get) {
        $sql = "SELECT * FROM patients WHERE id = $get";
        return $this->query($sql);
    }
}