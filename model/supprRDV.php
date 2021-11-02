<?php

require "Db.php";

class supprRDV extends Db {
    public function suppr($id) {
        $sql = "DELETE FROM appointments WHERE appointments.id = $id";
        return $this->query($sql);
    }
}