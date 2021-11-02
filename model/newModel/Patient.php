<?php

require "Db.php";

class Patient extends Db {

    public function list() {
        $sql = "SELECT * FROM patients";
        return $this->query($sql);
    }

    public function profile($get) {
        $sql = "SELECT * FROM patients WHERE id = $get";
        return $this->query($sql);
    }

    // public function search() {
    //     $sql = "SELECT * FROM patients WHERE MATCH";
    //     $this->query($sql);
    // }

}