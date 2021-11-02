<?php

// Créer une page profil-patient.php. Elle doit permettre d'afficher toutes les informations d'un patient. Elle doit être accessible depuis la page liste-patients.php et afficher les informations du patient sélectionné.

require "profil-patient.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil patient</title>
</head>
<body>
    <?php

    foreach($profil->profilUser($id) as $row) {
        echo "<p>" . "Prénom : " . $row["firstname"] . "</p>" .
        "<p>" . "Nom : " . $row["lastname"] . "</p>" .
        "<p>" . "Date de naissance : " . $row["birthdate"] . "</p>" .
        "<p>" . "Téléphone : " . $row["phone"] . "</p>" .
        "<p>" . "E-mail : " . $row["mail"] . "</p>";
    }

    ?>

    <h2>Rendez-vous :</h2>

    <?php
    foreach($rdv->listRDVPatient($id) as $row) {
        echo $row["dateHour"] . "<br>";
    }
    ?>

    <!-- Bouton "Modifier" permettant la modification des informations du patient -->
    <form method="post">
        <input type='submit' value='Modifier les informations du patient' name='modify'>
    </form>
    <br>
    <?php
    
    // Si le bouton "Modifier" a été cliqué, alors faire apparaitre les champs pour modifier les informations

    if (isset($_POST['modify'])) {
        foreach($profil->profilUser($id) as $row) {
            echo "<form action='modif-patient.php' method='post'>" .
            "Prénom :" . "<input name='firstname' value='" . $row["firstname"] . "'>" . "<br>" .
            "Nom :" . "<input name='lastname' value='" . $row["lastname"] . "'>" . "<br>" .
            "Date de naissance :" . "<input type='date' name='birthdate' value='" . $row["birthdate"] . "'>" . "<br>" .
            "Téléphone :" . "<input type='tel' name='phone' value='" . $row["phone"] . "'>" . "<br>" .
            "E-mail :" . "<input name='mail' value='" . $row["mail"] . "'>" . "<br>" .
            "<input type='hidden' name='id' value=" . $id . ">" .
            "<input type='submit' value='Envoyer'>" .
            "</form>";
        }
    }
    ?>
</body>
</html>