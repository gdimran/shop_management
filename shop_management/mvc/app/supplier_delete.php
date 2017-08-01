<?php

include_once './models/Supplier.php';

$object= new Supplier();

$object->prepare($_GET);
$object->prepare($_GET)->delete();


?>