<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author Imran Hossain
 */
class Category {
    public $id = ' ';
    public $category = ' ';
    public $decription= ' ';


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
         if(array_key_exists('category', $data)){
             $this->category = $data['category'];
         }
        if(array_key_exists('decription', $data)){
             $this->decription=$data['decription'];
         }
         
        
        
        return $this;
    }
    
  
   public function store() {
        $query="INSERT INTO `product_category` (`id`,`category`, `decription` ) VALUES (NULL, '$this->category','$this->decription')";
        
        if(mysql_query($query)){
            $_SESSION['Message']="Categories Added successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:category_list.php');
    }
    
    public function viewall() {
        $query="SELECT * FROM `product_category`";
        $userdetails=  mysql_query($query);
        while ($row=  mysql_fetch_assoc($userdetails)){
            $this->data[]=$row;
        }
        return $this->data;
        
    }
    
    
    public function show() {
       
       $query="SELECT * FROM `product_category` WHERE `id` ='".$this->id."'";
       $singledata=  mysql_query($query);
       $row=  mysql_fetch_assoc($singledata);
       return $row;
    }
    
    
 
    
    
        public function categoryUpdate() {
        $query = "UPDATE product_category
                SET
                category= '$this->category',
                decription= '$this->decription'

                WHERE id = '$this->id'";
	if(mysql_query($query)){
            $_SESSION['Message']="update successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:category_list.php');
    }
    
    
    public function delete() {
        $query="DELETE FROM `product_category` WHERE `product_category`.`id` ='".$this->id."'";
        
       if(mysql_query($query)){
            $_SESSION['Message']="Successfully deleted";
        }
        header("location:category_list.php");
    }
    
    
    
    
    
    
    
}
