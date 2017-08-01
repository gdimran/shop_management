<?php

include './models/ProductInfo.php';

$register= new ProductInfo();
$register->prepare($_POST);

$register->store();


