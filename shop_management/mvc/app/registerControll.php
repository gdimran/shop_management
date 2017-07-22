<?php

include './models/Register.php';
include './models/Database.php';

$register= new Register();
$register->prepare($_POST);

$register->store();

