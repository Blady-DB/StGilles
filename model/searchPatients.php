<?php

require "Db.php";

class searchPatients extends Db {
    public function search() {
        $sql = "SELECT * FROM patients WHERE MATCH(";
        $this->query($sql);
    }
}