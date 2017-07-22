<?php
/*
 * shop management loginControll
 */





if($_POST)
{
    if(isset($_POST['submit'])AND $_POST['submit']=="Login Now")
    {
      $email = $_POST['email'];
      $password = $_POST['password'];
       
       try
       {
           include './models/Login.php';
           $login= new Login($email,$password);
           
           if($login== TRUE)
           {
               session_start();
               $_SESSION['email'] = $email;
               header('Location:index.php');
           }
       } catch (Exception $ex) 
       {
           echo $ex->getMessage();
       }
       
       
    }
}