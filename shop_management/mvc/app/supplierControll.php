<?php

include './models/Supplier.php';



$supplier= new Supplier();
$supplier->prepare($_POST);

$supplier->store();


