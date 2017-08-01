<?php

include './models/Customer.php';

$register= new Customer();
$register->prepare($_POST);

$register->store();

