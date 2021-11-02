<?php

require "model/supprPatient.php";

$id = $_GET['id'];

$supprPatient = new supprPatient();
$supprPatient->suppr($id);

header("Location: exercice2.php");