<?php

include_once './models/Category.php';

$object= new Category();

$object->prepare($_GET);
$object->prepare($_GET)->delete();


?>