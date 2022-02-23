<?php
$title = 'St Gilles - Ajouter un rendez-vous';
$subtitle = 'Ajouter un rendez-vous';
ob_start();
?>

<form action="index.php?action=addRDVProcess" method="POST" class="text-center">
    <select name="patient">
        <?php foreach($list as $row) { ?>
            <option name='patient' value=' <?= $row['id'] ?>'> <?= $row['firstname'] . " " . $row['lastname'] ?></option>
            <?php } ?>
        </select>
        <input type="datetime-local" name="date" placeholder="Date" required>
        <button>
            <input type="submit" value="Envoyer"><i class="fas fa-arrow-right"></i>
        </button>
</form>

<?php

$content = ob_get_clean();
require ('baseView.php');