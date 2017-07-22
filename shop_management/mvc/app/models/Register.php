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
class Register {
    public $id = ' ';
    public $name = ' ';
    public $email = ' ';
    public $password = ' ';
    public $phone_no = ' ';
    public $address = ' ';
    public $image=' ';
    public $salary=' ';
    public $employee_roll = ' ';
    public $gender = ' ';

   

    public function __construct() {
         
        session_start();
        $conn = mysql_connect('localhost', 'root', '') or die('Opps unable to connect with database');
        mysql_select_db('shop_management');
        
    }
   
     

    public function prepare($data = '') {
        if(array_key_exists('id', $data)){
            $this->id=$data['id'];
        }
         if(array_key_exists('name', $data)){
             $this->name = $data['name'];
         }
        if(array_key_exists('email', $data)){
             $this->email=$data['email'];
         }
         if(array_key_exists('password', $data)){
             $this->password=$data['password'];
         }
         if(array_key_exists('phone', $data)){
             $this->phone_no=$data['phone'];
         }
         if(array_key_exists('address', $data)){
             $this->address=$data['address'];
         }
         
        if(array_key_exists('image', $data)){
            $this->image=$data['image'];
         }
         if(array_key_exists('salary', $data)){
            $this->salary=$data['salary'];
         }
         if(array_key_exists('employee_roll', $data)){
            $this->employee_roll=$data['employee_roll'];
         }
         if(array_key_exists('gender', $data)){
             $this->gender=$data['gender'];
         }
        
        
        return $this;
    }
    
  
   public function store() {
        $query="INSERT INTO `employees` (`id`,`name`, `email`, `password`, `phone_no`, `address`, `image`,`salary`,`employee_roll`, `gender` ) VALUES (NULL, '$this->name', '$this->email', '$this->password', '$this->phone_no', '$this->address', ' $this->image', ' ', ' ', '$this->gender')";
        
        if(mysql_query($query)){
            $_SESSION['Message']="Registration successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:login.php');
    }
    
    public function viewall() {
        $query="SELECT * FROM `employees`";
        $userdetails=  mysql_query($query);
        while ($row=  mysql_fetch_assoc($userdetails)){
            $this->data[]=$row;
        }
        return $this->data;
        
    }
    
    
    
    
    
    
    
    
    
    
}
