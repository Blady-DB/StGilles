<?php

require "Db.php";

class detailRDV extends Db {

    public function detail($id) {
        $sql = "SELECT * FROM appointments WHERE id = '$id'";
        return $this->query($sql);
    }
}