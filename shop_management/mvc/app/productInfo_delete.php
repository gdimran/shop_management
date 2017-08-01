<?php

include_once './models/ProductInfo.php';

$object= new ProductInfo();

$object->prepare($_GET);
$object->prepare($_GET)->delete();


?>