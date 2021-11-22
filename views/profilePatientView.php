<?php
$title = 'St Gilles - Profil';
$subtitle = 'Profil du patient';
ob_start();
?>

<?php

    foreach($profile as $row) { ?>
    <div>
        <p>Prénom : <?= $row["firstname"] ?> </p>
        <p>Nom : <?= $row["lastname"] ?> </p>
        <p>Date de naissance : <?= $row["birthdate"] ?> </p>
        <p>Téléphone : <?= $row["phone"] ?> </p>
        <p>E-mail : <?= $row["mail"] ?> </p>
    </div>
    <?php } ?>

    <h2>Rendez-vous :</h2>

    <?php
    foreach($rdv as $row) {
        echo $row["dateHour"] . "<br>";
    }
    ?>

    <!-- Bouton "Modifier" permettant la modification des informations du patient -->
    <form method="post">
        <input type='submit' value='Modifier les informations du patient' name='modifyPatient'>
        <input type='submit' value='Modifier le rendez-vous' name='modifyRDV'>
    </form>
    <br>
    <?php
    
    // Si le bouton "Modifier" a été cliqué, alors faire apparaitre les champs pour modifier les informations

    if (isset($_POST['modifyPatient'])) {
        foreach($profile as $row) { ?>
            <form action='index.php?action=modifyPatient' method='POST'>
                <input name='firstname' value=' <?= $row["firstname"] ?>' placeholder="Prénom">
                <input name='lastname' value=' <?= $row["lastname"] ?>' placeholder="Nom">
                <input type= "date" name='birthdate' value=' <?= $row["birthdate"] ?>' placeholder="Date de naissance">
                <input type= "tel" name='phone' value=' <?= $row["phone"] ?>' placeholder="Téléphone">
                <input type= "mail" name='mail' value=' <?= $row["mail"] ?>' placeholder="Mail">
                <input type='hidden' name='id' value=' <?= $_GET['id'] ?> '>
                <input type='submit' value='Envoyer'>
            </form>
        <?php
        }
    }
    if (isset($_POST['modifyRDV'])) { 
        foreach($rdv as $row) { ?>
            <form action='index.php?action=modifyRDV' method='POST'>
                <input type="datetime-local" name="date" placeholder="Date">
                <input type='hidden' name='id' value=' <?= $row['id'] ?> '>
                <input type="submit" value="Envoyer">
            </form>
        <?php
        }
    }

$content = ob_get_clean();
require ('baseView.php');