<?php

require "model/modifPatient.php";

if ($_POST["lastname"] != '' || $_POST["firstname"] != '' || $_POST["birthdate"] != '' || $_POST["phone"] != '' || $_POST["mail"] != '') {
    $modifier = new modifPatient($_POST['lastname'], $_POST['firstname'], $_POST['birthdate'], $_POST['phone'], $_POST['mail'], $_POST['id']);
    $modifier->modifUser();
    echo "Patient modifié, retour dans la page du patient...";
    header("Refresh:2, url=exercice3.php?id='" . $_POST['id'] . "'");
    
} else {
    echo "Données non valides";
}