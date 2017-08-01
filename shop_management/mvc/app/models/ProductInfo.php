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
class ProductInfo {
    public $id = ' ';
    public $product_name= ' ';
    public $category = ' ';
    public $stock_qu= ' ';
    public $price= ' ';
    public $buy_price= ' ';
    public $product_id = ' ';


    public function __construct() {
         
         if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
        $conn = mysql_connect('localhost', 'root', '') or die('Opps unable to connect with database');
        mysql_select_db('shop_management');
        
    }
   
     

    public function prepare($data = '') {
        if(array_key_exists('id', $data)){
            $this->id=$data['id'];
        }
         if(array_key_exists('product_name', $data)){
             $this->product_name = $data['product_name'];
         }
        if(array_key_exists('category', $data)){
             $this->category=$data['category'];
         }
         if(array_key_exists('stock_qu', $data)){
             $this->stock_qu=$data['stock_qu'];
         }
         if(array_key_exists('price', $data)){
             $this->price=$data['price'];
         }
         
         if(array_key_exists('buy_price', $data)){
             $this->buy_price=$data['buy_price'];
         }
         
         if(array_key_exists('product_id', $data)){
             $this->product_id=$data['product_id'];
         }
        
        
        return $this;
    }
    
  
   public function store() {
        $query="INSERT INTO `product_info` (`id`,`product_name`, `category`,`stock_qu`, `price`,`buy_price`,`product_id` ) VALUES (NULL, '$this->product_name','$this->category', '$this->stock_qu', '$this->price',  '$this->buy_price','$this->product_id')";
        
        if(mysql_query($query)){
            $_SESSION['Message']="Customer Added successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:product_list.php');
    }
    
    //dynamically get prodect category from different table.
    public function getCatgory() {
       
       $query="SELECT ALL `category` FROM `product_category` ";
       $category=  mysql_query($query);
        while ($row=  mysql_fetch_assoc($category)){
            $this->data[]=$row;
        }
        return $this->data;
    }
    
    
    public function viewall() {
        $query="SELECT * FROM `product_info`";
        $userdetails=  mysql_query($query);
        while ($row=  mysql_fetch_assoc($userdetails)){
            $this->data[]=$row;
        }
        return $this->data;
        
    }
    
    
    public function show() {
       
       $query="SELECT * FROM `product_info` WHERE `id` ='".$this->id."'";
       $singledata=  mysql_query($query);
       $row=  mysql_fetch_assoc($singledata);
       return $row;
    }
    
    
 
    
    
        public function productUpdate() {
        $query = "UPDATE product_info
                SET
                product_name= '$this->product_name',
                category= '$this->category',
                stock_qu= '$this->stock_qu',
                price='$this->price',
                buy_price = '$this->buy_price',
                product_id = '$this->product_id'

                WHERE id = '$this->id'";
	if(mysql_query($query)){
            $_SESSION['Message']="update successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:product_list.php');
    }
    
    
    public function delete() {
        $query="DELETE FROM `product_info` WHERE `product_info`.`id` ='".$this->id."'";
        
       if(mysql_query($query)){
            $_SESSION['Message']="Successfully deleted";
        }
        header("location:product_list.php");
    }
    
    
    
    
    
    
    
}
