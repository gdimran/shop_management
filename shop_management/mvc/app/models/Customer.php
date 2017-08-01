<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author Imran Hossain
 */
class Customer {
    public $id = ' ';
    public $customer_name = ' ';
    public $contact_no = ' ';
    public $city = ' ';
    public $address = ' ';
    public $gender = ' ';


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
         if(array_key_exists('customer_name', $data)){
             $this->customer_name = $data['customer_name'];
         }
        if(array_key_exists('contact_no', $data)){
             $this->contact_no=$data['contact_no'];
         }
         if(array_key_exists('city', $data)){
             $this->city=$data['city'];
         }
         if(array_key_exists('address', $data)){
             $this->address=$data['address'];
         }
         
         if(array_key_exists('gender', $data)){
             $this->gender=$data['gender'];
         }
        
        
        return $this;
    }
    
  
   public function store() {
        $query="INSERT INTO `customer_info` (`id`,`customer_name`, `contact_no`,`city`, `address`,`gender` ) VALUES (NULL, '$this->customer_name','$this->contact_no', '$this->city', '$this->address',  '$this->gender')";
        
        if(mysql_query($query)){
            $_SESSION['Message']="Customer Added successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:customer_list.php');
    }
    
    public function viewall() {
        $query="SELECT * FROM `customer_info`";
        $userdetails=  mysql_query($query);
        while ($row=  mysql_fetch_assoc($userdetails)){
            $this->data[]=$row;
        }
        return $this->data;
        
    }
    
    
    public function show() {
       
       $query="SELECT * FROM `customer_info` WHERE `id` ='".$this->id."'";
       $singledata=  mysql_query($query);
       $row=  mysql_fetch_assoc($singledata);
       return $row;
    }
    
    
 
    
    
        public function customerUpdate() {
        $query = "UPDATE customer_info
                SET
                customer_name= '$this->customer_name',
                contact_no= '$this->contact_no',
                city= '$this->city',
                address='$this->address',
                gender = '$this->gender'

                WHERE id = '$this->id'";
	if(mysql_query($query)){
            $_SESSION['Message']="update successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:customer_list.php');
    }
    
    
    public function delete() {
        $query="DELETE FROM `customer_info` WHERE `customer_info`.`id` ='".$this->id."'";
        
       if(mysql_query($query)){
            $_SESSION['Message']="Successfully deleted";
        }
        header("location:customer_list.php");
    }
    
    
    
    
    
    
    
}
