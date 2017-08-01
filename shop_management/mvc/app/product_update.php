<?php
    include_once './models/ProductInfo.php';
 
  
  $object= new ProductInfo();

$object->prepare($_POST)->productUpdate();

    
     

  
 

?>
