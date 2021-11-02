<?php

require "model/listPatient.php";

$button = $_GET['submit'];
$search = $_GET[''];

$list = new listPatient();
$list->listUsers();