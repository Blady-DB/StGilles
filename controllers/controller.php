<?php
require_once ('models/Db.php');
require_once ('models/Patients.php');
require_once ('models/RDV.php');

// ----------  PATIENTS ----------

function listPatients() {
    $listPatients = new Patients();
    $list = $listPatients->list();

    require ('views/listPatientsView.php');
}

function addPatient() {
    require ('views/addPatientView.php');
}

function addPatientProcess() {
    require ('views/addPatientView.php');

    if ($_POST["lastname"] != '' || $_POST["firstname"] != '' || $_POST["birthdate"] != '' || $_POST["phone"] != '' || $_POST["mail"] != '') {

        $add = new Patients();
        $add->add($_POST["lastname"], $_POST["firstname"], $_POST["birthdate"], $_POST["phone"], $_POST["mail"]);

        echo '<script>';
        echo 'alert("Le patient a bien été ajouté");';
        echo 'window.location.href = "index.php?action=listPatients";';
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Les informations saisies sont incorrectes, veuillez réessayer");';
        echo '</script>';
    }
}

function modifyPatient() {
    if ($_POST["lastname"] != '' || $_POST["firstname"] != '' || $_POST["birthdate"] != '' || $_POST["phone"] != '' || $_POST["mail"] != '') {

        $modify = new Patients();
    
        $modify->modify($_POST["lastname"], $_POST["firstname"], $_POST["birthdate"], $_POST["phone"], $_POST["mail"], $_POST['id']);

        echo '<script>';
        echo 'alert("Le patient a bien été modifié");';
        echo 'window.location.href = "index.php?action=profilePatient&id='.$_POST['id'].'";';
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Les informations saisies sont incorrectes, veuillez réessayer");';
        echo '</script>';
    }
}

function profilePatient() {
    $profilePatient = new Patients();

    $profile = $profilePatient->profile($_GET['id']);
    $rdv = $profilePatient->listRDVPatient($_GET['id']);

    require ('views/profilePatientView.php');
}

function deletePatient() {
    $deletePatient = new Patients();
    $delete = $deletePatient->delete($_GET["id"]);

    return header('Location: index.php?action=listPatients');
}



// ---------- RDVs ----------

function listRDVs() {
    $listRDVs = new RDV();
    $list = $listRDVs->list();

    require ('views/listRDVsView.php');
}

function addRDV() {
    $listPatients = new Patients();
    $list = $listPatients->list();

    require ('views/addRDVView.php');
}

function addRDVProcess() {
    require ('views/addRDVView.php');

    if (isset($_POST['date'], $_POST['patient'])) {
        $ajoutRDV = new RDV();
        $ajoutRDV->add($_POST['date'], $_POST['patient']);
        
        echo '<script>';
        echo 'alert("Le rendez-vous a bien été ajouté");';
        echo 'window.location.href = "index.php?action=listRDVs";';
        echo '</script>';
    } 
    else {
        echo '<script>';
        echo 'alert("Les informations saisies sont incorrectes, veuillez réessayer");';
        echo '</script>';
    }
}

function modifyRDV() {
    if ($_POST["date"] != '') {

        $modify = new RDV();
    
        $modify->modify($_POST["date"], $_POST["id"]);
    
        echo '<script>';
        echo 'alert("Le rendez-vous du patient a bien été modifié");';
        echo 'window.location.href = "index.php?action=profilePatient&id='.$_POST['id'].'";';
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Les informations saisies sont incorrectes, veuillez réessayer");';
        echo '</script>';
    }
}

function deleteRDV() {
    $deleteRDV = new RDV();
    $delete = $deleteRDV->delete($_GET['id']);

    return header('Location: index.php?action=listRDVs');
}