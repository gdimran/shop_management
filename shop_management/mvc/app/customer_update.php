<?php
    include_once './models/Customer.php';
 
  
  $object= new Customer();

$object->prepare($_POST)-> customerUpdate();

    
     

  
 

?>
