<?php

/* 
 * Logout
 */
session_start();
$_SESSION = array();
session_destroy();
header('Location:login.php');
