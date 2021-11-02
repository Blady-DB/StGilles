<?php

require "Db.php";

// Cette class permet d'ajouter les patients

class addPatient extends Db {
    protected $lastname;
    protected $firstname;
    protected $birthdate;
    protected $phone;
    protected $mail;

    public function __construct($last, $first, $birth, $tel, $email) {
        $this->lastname = $last;
        $this->firstname = $first;
        $this->birthdate = $birth;
        $this->phone = $tel;
        $this->mail = $email;
    }

    public function addUser() {
        $sql = "INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES ('$this->lastname', '$this->firstname', '$this->birthdate', '$this->phone', '$this->mail')";
        $this->query($sql);
    }
}