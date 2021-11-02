<?php

require "Db.php";

class supprPatient extends Db {
    public function suppr($id) {
        $sql = "DELETE FROM patients, appointments USING patients INNER JOIN appointments WHERE patients.id = $id AND appointments.idPatients = $id";
        $this->query($sql);
        
    }
}