<?php

require "Db.php";

class modifRDV extends Db {

    public function modif($rdv, $id) {
        $sql = "UPDATE appointments SET dateHour = '$rdv' WHERE appointments.id = '$id'";
        $this->query($sql);
    }
}