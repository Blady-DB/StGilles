<?php

require "Db.php";

class listRDV extends Db {

    public function listRDVs() {
        $sql = "SELECT * FROM appointments";
        return $this->query($sql);
    }
}