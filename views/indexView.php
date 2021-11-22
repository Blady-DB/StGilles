<?php
$title = 'St Gilles - Espace admin';
$subtitle = 'Veuillez sélectionner une option dans le menu';
ob_start();
?>

<?php

$content = ob_get_clean();
require ('baseView.php');