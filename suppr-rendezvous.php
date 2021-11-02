<?php

require "model/supprRDV.php";

$id = $_GET["id"];

$suppr = new supprRDV();
$suppr->suppr($id);

header("Location: exercice6.php");