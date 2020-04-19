<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/28/2018
 * Time: 1:45 PM
 */


session_start();

 if(isset($_GET['id']) && !empty('id'))
 {
     $id=$_GET('id');

     echo @$_SESSION['cart_'.$id] +=1;
     foreach ($_SESSION as $item=>$value)
     {
         echo $item.' '.$value;


     }
 }


 ?>