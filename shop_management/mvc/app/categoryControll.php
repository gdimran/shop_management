<?php

include './models/Category.php';

$register= new Category();
$register->prepare($_POST);

$register->store();

