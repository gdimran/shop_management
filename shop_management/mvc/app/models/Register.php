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

    
    public $link;
	public $error;

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
        $query="INSERT INTO `employees` (`id`,`name`, `email`, `password`, `phone_no`, `address`, `image`,`salary`,`employee_roll`, `gender` ) VALUES (NULL, '$this->name', '$this->email', '$this->password', '$this->phone_no', '$this->address', ' $this->image', '$this->salary ', '$this->employee_roll ', '$this->gender')";
        
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
    
    
    public function show() {
       
       $query="SELECT * FROM `employees` WHERE `id` ='".$this->id."'";
       $singledata=  mysql_query($query);
       $row=  mysql_fetch_assoc($singledata);
       return $row;
    }
    
    
 // Update data
  	/*public function update(){
            $query = "UPDATE employees
                SET
                name  = '$this->name',
                email = '$this->email',
                password = '$this->password',
                phone_no='$this->phone_no',
                address = '$this->address',
                image = '$this->image',
                salary='$this->salary',
                employee_roll = '$this->employee_roll',
                gender = '$this->gender'

                WHERE id = '$this->id'";
	if(mysql_query($query)){
            $_SESSION['Message']="update successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:employee_list.php');
  }
         * 
         * 
         */
    
    
        public function emplyoeeUpdate() {
        $query = "UPDATE employees
                SET
                name  = '$this->name',
                email = '$this->email',
                password = '$this->password',
                phone_no='$this->phone_no',
                address = '$this->address',
                image = '$this->image',
                salary='$this->salary',
                employee_roll = '$this->employee_roll',
                gender = '$this->gender'

                WHERE id = '$this->id'";
	if(mysql_query($query)){
            $_SESSION['Message']="update successfull";
        }  else {
            echo 'conncetion error!';
        }
        header('location:employee_list.php');
    }
    
    
    public function delete() {
        $query="DELETE FROM `employees` WHERE `employees`.`id` ='".$this->id."'";
        
       if(mysql_query($query)){
            $_SESSION['Message']="Successfully deleted";
        }
        header("location:employee_list.php");
    }
    
    
    
    
    
    
    
}
