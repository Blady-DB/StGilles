<?php

// Fichier appelé lors de l'ajout d'un patient via exercice1.php (formulaire d'inscription)

require "model/addPatient.php";


if ($_POST["lastname"] != '' || $_POST["firstname"] != '' || $_POST["birthdate"] != '' || $_POST["phone"] != '' || $_POST["mail"] != '') {

    $envoi = new addPatient($_POST["lastname"], $firstname = $_POST["firstname"], $birthdate = $_POST["birthdate"], $phone = $_POST["phone"], $mail = $_POST["mail"]);

    $envoi->addUser();

    echo "Le patient a bien été ajouté, redirection en cours vers la liste des patients...";
    
    header("Refresh:3, url=exercice2.php");
} else {
    echo "Données non valides";
}