<?php


/**
 * Login Class
 *
 * @author Imran Hossain
 */
class Login 
{
    private $email;
    private $password;
    
    
    function __construct($email, $password) 
    {
        $this->setData($email, $password);
        
        $this->connectionDB();
        
        $this->getData();
    }
    
    
    private function setData($email,$password)
    {
        $this->email = $email;
        $this->password= $password;
    }
    
    private function connectionDB() {
        session_start();
        $conn = mysql_connect('localhost', 'root', '') or die('Opps unable to connect with database');
        mysql_select_db('shop_management');
    }
    
    
    function getData()
    {
        $query="SELECT * FROM `employees` WHERE `email`= '$this->email' AND `password`= '$this->password'";
        $sql= mysql_query($query);
        
        if(mysql_num_rows($sql)>0)
        {
            return TRUE;
        }
        else
        {
            throw new Exception( header('Location:login.php'));
        }
    }
    
    
}
