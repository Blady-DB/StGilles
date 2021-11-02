<?php

require "Db.php";

class addRDV extends Db {
    protected $rdv;
    protected $idUser;

    public function __construct($app, $id) {
        $this->rdv = $app;
        $this->idUser = $id;
    }

    public function addAppointment() {
        $sql = "INSERT INTO appointments (dateHour, idPatients) VALUES ('$this->rdv', '$this->idUser')";
        $this->query($sql);
    }
}