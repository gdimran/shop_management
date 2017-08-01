<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Imran Hossain
 */
class Supplier {
    public $supplier_id = ' ';
    public $name = ' ';
    public $email= ' ';
    public $phone= ' ';
    public $product_name= ' ';
    public $product_qu = ' ';
    public $product_price = ' ';


    public function __construct() {
         
        if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
        $conn = mysql_connect('localhost', 'root', '') or die('Opps unable to connect with database');
        mysql_select_db('shop_management');
        
    }
   
     

    public function prepare($data = '') {
        if(array_key_exists('supplier_id', $data)){
            $this->supplier_id=$data['supplier_id'];
        }
         if(array_key_exists('name', $data)){
             $this->name = $data['name'];
         }
        if(array_key_exists('email', $data)){
             $this->email=$data['email'];
         }
         if(array_key_exists('phone', $data)){
             $this->phone=$data['phone'];
         }
         if(array_key_exists('product_name', $data)){
             $this->product_name=$data['product_name'];
         }
         
         if(array_key_exists('product_qu', $data)){
             $this->product_qu=$data['product_qu'];
         }
         
         if(array_key_exists('product_price', $data)){
             $this->product_price=$data['product_price'];
         }
        
        
        return $this;
    }
    
  
   public function store() {
        $query="INSERT INTO `supplier_info` (`supplier_id`, `name`, `email`, `phone`, `product_name`, `product_qu`, `product_price`) VALUES (NULL, '$this->name','$this->email', '$this->phone', '$this->product_name',  '$this->product_qu','$this->product_price')";

        if(mysql_query($query)){
            $_SESSION['Message']="Customer Added successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:supplier_list.php');
    }
    
    //dynamically get prodect category from different table.
    public function getCatgory() {
       
       $query="SELECT ALL `category` FROM `supplier_info` ";
       $category=  mysql_query($query);
        while ($row=  mysql_fetch_assoc($category)){
            $this->data[]=$row;
        }
        return $this->data;
    }
    
    
    public function viewall() {
        $query="SELECT * FROM `supplier_info`";
        $userdetails=  mysql_query($query);
        while ($row=  mysql_fetch_assoc($userdetails)){
            $this->data[]=$row;
        }
        return $this->data;
        
    }
    
    
    public function show() {
       
       $query="SELECT * FROM `supplier_info` WHERE `supplier_id` ='".$this->supplier_id."'";
       $singledata=  mysql_query($query);
       $row=  mysql_fetch_assoc($singledata);
       return $row;
    }
    
    
 
    
    
        public function supplierUpdate() {
        $query = "UPDATE supplier_info
                SET
                name= '$this->name',
                email = '$this->email',
                phone = '$this->phone',
                product_name='$this->product_name',
                product_qu = '$this->product_qu',
                product_price = '$this->product_price'

                WHERE supplier_id = '$this->supplier_id'";
	if(mysql_query($query)){
            $_SESSION['Message']="update successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:supplier_list.php');
    }
    
    
    public function delete() {
        $query="DELETE FROM `supplier_info` WHERE `supplier_info`.`supplier_id` ='".$this->supplier_id."'";
        
       if(mysql_query($query)){
            $_SESSION['Message']="Successfully deleted";
        }
        header("location:supplier_list.php");
    }
    
    
    
    
    
    
    
}
