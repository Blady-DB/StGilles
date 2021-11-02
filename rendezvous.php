<?php

require "model/detailRDV.php";

$id = $_GET["id"];

$rdv = new detailRDV();
$rdv->detail($id);