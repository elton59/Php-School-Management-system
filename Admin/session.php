<?php

 
   session_start();
     include('conn.php');
   $user_check = $_SESSION['login_user'];
   
   
   $result=$mysqli->query("select * from admin where email = '$user_check' ");
   
    while($row =$result->fetch_assoc())
    {   
   $login_session = $row['email'];
   }
   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
      die();
   }
?>