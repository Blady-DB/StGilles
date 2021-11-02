<?php

require "Db.php";

// Cette class permet de modifier les informations d'un patient

class modifPatient extends Db {
    protected $lastname;
    protected $firstname;
    protected $birthdate;
    protected $phone;
    protected $mail;
    protected $ids;

    public function __construct($last, $first, $birth, $tel, $email, $id) {
        $this->lastname = $last;
        $this->firstname = $first;
        $this->birthdate = $birth;
        $this->phone = $tel;
        $this->mail = $email;
        $this->ids = $id;
    }

    public function modifUser() {
        $sql = "UPDATE patients SET lastname = '$this->lastname', firstname = '$this->firstname', birthdate = '$this->birthdate', phone = '$this->phone', mail = '$this->mail' WHERE patients.id = '$this->ids'";
        $this->query($sql);
    }
}