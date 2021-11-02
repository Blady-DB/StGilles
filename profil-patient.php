<?php

require "model/profilPatient.php";

$id = $_GET["id"];

$profil = new profilPatient();
$profil->profilUser($id);

$rdv = new profilPatient();
$rdv->listRDVPatient($id);