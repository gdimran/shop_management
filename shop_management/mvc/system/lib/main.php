<?php


/**
 * Description of main class
 *
 * @author Imran Hossain
 */
class Main {
   public function __construct() {
        session_start();
        $conn = mysql_connect('localhost', 'root', '') or die('Opps unable to connect with database');
        mysql_select_db('shop_management');
    }
}
