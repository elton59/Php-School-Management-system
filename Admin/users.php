<?php

 error_reporting(0);
include('conn.php');
include('sidenav.php');


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

<script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


<link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
<link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
</head>

<body class=" theme-blue">

    <!-- Demo page code -->

 <script type="text/javascript">
        
$(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
           
 if(match) var color = match[1];
            if(color) {
  $('body').removeClass(function (index, css) {
                    
return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                
$('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    
</head>
<body>



  
<div class="ts-main-content">

  
</div>


<div class="content-wrapper">
  <div class="container-fluid" style="float: center">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">

    <div class="panel panel-success">

        <div class="panel-heading"><center>Manage Users</center></div>
           <div class="col-sm-6">
</div>


        <div class="panel-body">
        	<fieldset>
<form action="" method="POST" >

 <input type="text" name="school_name" placeholder="Search  ">
 <input type="submit" name="search" value="search data">

 </form>
 
           <div class="table-responsive ps">
            <h1>HeadTeachers</h1>
         <table id="example1" class="table table-responsive ps ">
                      <thead>
                        <tr><th>Email</th><th>FirstName</th><th>LastName</th><th>ShoolName</th><th>Status</th><th>Action</th></tr>
                      </thead>
                      
                      <?php
                  $result=$mysqli->query("select * from headteacher")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                     <td>".$row['email']."</td>
                    <td>".$row['FirstName']."</td>
                    <td>".$row['LastName']."</td>
                    <td>".$row['SchoolName']."</td>
                    <td>".$row['status']."</td>  
                   <td> <a href='users.php?ahid=$row[email]' class='btn btn-info'>Approve<a>
                   <a href='users.php?rjhid=$row[email]' class='btn btn-danger'>Reject<a>
                   <a href='delete.php?dhid=$row[email]' class='btn btn-success'>Delete<a>
                   </td>
                   </tbody>
                    "
                  ;}
    
                
            ?>
</table>

           <div class="table-responsive ps">
            <h1>Finance</h1>
         <table id="example1" class="table table-responsive ps ">
                      <thead>
                        <tr><th>Email</th><th>FirstName</th><th>LastName</th><th>ShoolName</th><th>Status</th><th>Action</th></tr>
                      </thead>
                      
                      <?php
                  $result=$mysqli->query("select * from finance")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                     <td>".$row['email']."</td>
                    <td>".$row['FirstName']."</td>
                    <td>".$row['LastName']."</td>
                    <td>".$row['SchoolName']."</td>
                    <td>".$row['status']."</td>  
                 
                   <a href='delete.php?dfid=$row[email]' class='btn btn-success'>Delete<a>
                   </td>
                   </tbody>
                    "
                  ;}
    
                
            ?>
</table>

 <div class="table-responsive ps">
             <h1> Quality Assuarance Officer</h1>
         <table id="example1" class="table table-responsive ps ">
                      <thead>
                        <tr><th>Email</th><th>FirstName</th><th>LastName</th><th>Status</th><th>Action</th></tr>
                      </thead>
                      
                      <?php
                      
                  $result=$mysqli->query("select * from qrofficer")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                     <td>".$row['email']."</td>
                    <td>".$row['FirstName']."</td>
                    <td>".$row['LastName']."</td>
                    
                    <td>".$row['status']."</td>  
                   <td> <a href='delete.php?dqid=$row[email]' class='btn btn-success'>Delete<a></td>
                   </tbody>
                    "
                  ;}
                
                
            ?>
</table>
</div>
   <div class="table-responsive ps">
   <h1>internal_curriculumsupervisor</h1>
         <table id="example1" class="table table-responsive ps ">
                      <thead>
                        <tr><th>Email</th><th>Password</th><th>Status</th><th>Action</th></tr>
                      </thead>
                      
                      <?php
                      
                  $result=$mysqli->query("select * from internal_curriculumsupervisor")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                     <td>".$row['email']."</td>
                   
                    <td>".$row['password']."</td>
                    
                    <td>".$row['status']."</td>  
                    <td><a href='delete.php?diid=$row[email]' class='btn btn-success'>Delete<a></td>
                   </tbody>
                    "
                  ;}
                
                
            ?>
</table> 
   <div class="table-responsive ps">
   <h1>Cource Panel Chairperson</h1>
         <table id="example1" class="table table-responsive ps ">
                      <thead>
                        <tr><th>Email</th><th>Password</th><th>Status</th><th>Action</th></tr>
                      </thead>
                      
                      <?php
                      
                  $result=$mysqli->query("select * from  ministryincharge")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                     <td>".$row['email']."</td>
                   
                    <td>".$row['password']."</td>
                    
                    <td>".$row['status']."</td>  
                    <td><a href='delete.php?dmid=$row[email]' class='btn btn-success'>Delete<a></td>
                   </tbody>
                    "
                  ;}
                
                
            ?>
</table>
</div>


    </div>
    <?php
             if(isset($_GET['ahid']))
  {
    $id=$_GET['ahid'];
    $result=$mysqli->query("UPDATE headteacher SET status='approved'  where email='$id'")or die($mysqli->error);
    
  }  
 
    
   if(isset($_GET['rjsid']))
  {
    $id=$_GET['rjhid'];
    $result=$mysqli->query("UPDATE headteacher SET status='rejected'  where email='$id'")or die($mysqli->error);
    
  }
     if(isset($_GET['afid']))
  {
    $id=$_GET['afid'];
    $result=$mysqli->query("UPDATE finance SET status='approved'  where email='$id'")or die($mysqli->error);
    
  }   
   if(isset($_GET['rjfid']))
  {
    $id=$_GET['rjfid'];
    $result=$mysqli->query("UPDATE finance SET status='rejected'  where email='$id'")or die($mysqli->error);
    
  }
     if(isset($_GET['aqid']))
  {
    $id=$_GET['aqid'];
    $result=$mysqli->query("UPDATE qrofficer SET status='approved'  where email='$id'")or die($mysqli->error);
    
  }   
   if(isset($_GET['rjqid']))
  {
    $id=$_GET['rjqid'];
    $result=$mysqli->query("UPDATE finance SET status='rejected'  where email='$id'")or die($mysqli->error);
    
  }
    
    
    
     
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>
<script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
       
 $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>


</body>
</html>