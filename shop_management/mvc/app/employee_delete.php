<?php

include_once './models/Register.php';

$object= new Register();

$object->prepare($_GET);
$object->prepare($_GET)->delete();


?>