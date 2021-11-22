<?php
$title = 'St Gilles - Ajouter un patient';
$subtitle = 'Ajouter un patient';
ob_start();
?>

<form action="index.php?action=addPatientProcess" method="POST" class="text-center">
    <input type="text" name="firstname" placeholder="Prénom du patient" required>
    <input type="text" name="lastname" placeholder="Nom du patient" required>
    <input type="date" name="birthdate" placeholder="Date de naissance" required>
    <input type="tel" name="phone" placeholder="Téléphone" required>
    <input type="text" name="mail" placeholder="E-mail" required>
    <input type="submit" value="Envoyer">
</form>

<?php

$content = ob_get_clean();
require ('baseView.php');