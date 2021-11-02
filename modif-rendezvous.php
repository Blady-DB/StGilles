<?php

require "model/modifRDV.php";

$rdv = new modifRDV();
$rdv->modif($_POST['dateHour'], $_POST['id']);

if (isset($_POST['dateHour'], $_POST['id'])) {
    echo "Bravo ! Ca marche ! Redirection vers la liste des rendez-vous...";
    header("Refresh:3, url=exercice6.php");
} else {
    echo "Ca marche pas";
}