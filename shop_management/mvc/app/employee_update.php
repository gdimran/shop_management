<?php
    include_once './models/Register.php';
 
  
  $object= new Register();

$object->prepare($_POST)-> emplyoeeUpdate();

    
     

  
 

?>
