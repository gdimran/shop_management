<?php
    include_once './models/Supplier.php';
 
  
  $object= new Supplier();

  /*echo '<pre>';
  print_r($object->prepare($_POST));
  echo '</pre>';*/
  
 $object->prepare($_POST)->supplierUpdate();

    
     

  
 

?>
