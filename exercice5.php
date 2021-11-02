<?php

// Créer une page ajout-rendezvous.php et y créer un formulaire permettant de créer un rendez-vous. Elle doit être accessible depuis la page index.php.

require "liste-patient.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôpital St Gilles</title>
</head>
<body>
    <h1>Créer un rendez-vous</h1>
    <form action="ajout-rendezvous.php" method="POST">
        <select name="patient">
            <?php foreach($list->listUsers() as $row) {
            echo "<option value='" . $row['id'] . "'>" . $row['firstname'] . " " . $row['lastname'] . "</option>";
            } ?>
        </select>
        <input type="datetime-local" name="date" placeholder="Date">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>