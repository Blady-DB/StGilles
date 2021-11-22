<?php

require('controllers/controller.php');

if (isset($_GET['action'])) {
// ----------  PATIENTS ----------
    if ($_GET['action'] == 'listPatients') {
        listPatients();
    }
    elseif ($_GET['action'] == 'addPatient') {
        addPatient();
    }
    elseif ($_GET['action'] == 'addPatientProcess') {
        addPatientProcess();
    }
    elseif ($_GET['action'] == 'profilePatient') {
        profilePatient();
    }
    elseif ($_GET['action'] == 'deletePatient') {
        deletePatient();
    }
    elseif ($_GET['action'] == 'modifyPatient') {
        modifyPatient();
    }
// ----------  RDVs ----------
    elseif ($_GET['action'] == 'listRDVs') {
        listRDVs();
    }
    elseif ($_GET['action'] == 'addRDV') {
        addRDV();
    }
    elseif ($_GET['action'] == 'addRDVProcess') {
        addRDVProcess();
    }
    elseif ($_GET['action'] == 'deleteRDV') {
        deleteRDV();
    }
    elseif ($_GET['action'] == 'modifyRDV') {
        modifyRDV();
    }
} else {
    require('views/indexView.php');
}