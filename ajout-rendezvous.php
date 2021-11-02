<?php

require "model/addRDV.php";

$ajoutRDV = new addRDV($_POST['date'], $_POST['patient']);
$ajoutRDV->addAppointment();

if (isset($_POST['date'], $_POST['patient'])) {
    echo "Le rendez-vous a bien été ajouté, redirection en cours vers la liste des rendez-vous...";
    header("Refresh:2, url=exercice6.php");
} else {
    echo "Il y a une erreur dans votre saisie";
}