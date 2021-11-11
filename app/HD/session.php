<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['headteacher'];
   
   $sql = "select * from headteacher where email = '$user_check' ";
   $ses_sql=mysqli_query($mysqli,$sql);
   
    while($row =$ses_sql->fetch_assoc())
    {   
   $login_session = $row['email'];
   }
   if(!isset($_SESSION['headteacher'])){
      header("location:index.php");
      die();
   }
?>