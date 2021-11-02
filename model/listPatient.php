<?php

require "Db.php";

// Cette class permet de lister tous les patients

class listPatient extends Db {

    public function listUsers() {
        $sql = "SELECT * FROM patients";
        return $this->query($sql);
    }
}