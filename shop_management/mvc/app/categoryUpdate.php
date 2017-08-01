<?php
    include_once './models/Category.php';
 
  
  $object= new Category();

$object->prepare($_POST)->categoryUpdate();

    
     

  
 

?>
