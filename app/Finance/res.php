<?php 
session_start();

include('connection.php');
	

$sql=mysqli_query($conn,"SELECT * FROM resources");
$rr=mysqli_num_rows($sql);
if(!$rr)
{
echo "<h2 style='color:green'>No user records !!!</h2>";
echo "<a style='text-decoration:underline' href='user.php?page=add_group'>Add New  ?</a>";
}

?>
<script>
	function Delete group(id)
	{
		if(confirm("You want to delete this Group ?"))
		{
		window.location.href="delete_group.php?id="+id;
		}
	}
</script>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    
<title>UGUNJA DOE Admin</title>
    
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
    <meta name="author" content="">

    

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

    
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
    

<style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
       
 .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        
$(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        
});
    </script>
 
<link rel="shortcut icon" href="../assets/ico/favicon.ico">  
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            
<span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
<span class="icon-bar"></span>
          <span class="navbar-brand"> my admin </span></a></div>

        
<div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            
<li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    
<span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> ADMIN PANEL                   
<i class="fa fa-caret-down"></i>
                </a>
              <ul class="dropdown-menu">
                <li><a href="./">My Account</a></li>
               
 <li class="divider"></li>
                <li class="dropdown-header">Admin Panel</li>
                <li><a href="./">Users</a></li>
                
<li><a href="./">Security</a></li>
                <li><a tabindex="-1" href="./">Payments</a></li>
                <li class="divider"></li>
                
<li><a tabindex="-1" href="sign_in.php">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    
<div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse">
<i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in">
 
<li ><a href="calendar.html"><span class="fa fa-caret-right"></span> Calendar</a></li>
    </ul></li>

<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse">
<i class="fa fa-fw fa-briefcase"></i> Account <span class="label label-info">+3</span></a></li>
       
 <li><ul class="accounts-menu nav nav-list collapse">
<li ><a href="sign-in.html"><span class="fa fa-caret-right"></span> Sign In</a></li>
 <li ><a href="sign-up.html"><span class="fa fa-caret-right"></span> Sign Up</a></li>    
<li ><a href="reset-password.html"><span class="fa fa-caret-right"></span> Reset Password</a></li>
    </ul></li>

<li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse">
<i class="fa fa-fw fa-legal"></i> Legal<i class="fa fa-collapse"></i></a></li>
<li><ul class="legal-menu nav nav-list collapse">
 <li ><a href="privacy-policy.html"><span class="fa fa-caret-right"></span> Privacy Policy</a></li>
<li ><a href="terms-and-conditions.html"><span class="fa fa-caret-right"></span> Terms and Conditions</a></li>
    </ul></li>

       
 <li><a href="help.html" class="nav-header"><i class="fa fa-fw fa-question-circle"></i> Help</a></li>
<li><a href="faq.html" class="nav-header"><i class="fa fa-fw fa-comment"></i> Faq</a></li>
                

    </div>

    <div class="content">
<div class="header"> 
            <h1 class="page-title">RESOURCES ALLOCATED FOR PRIMARY SCHOOLS</h1>
                    
<ul class="breadcrumb">
            <li><a href="#">Home</a> </li>

        </ul>

        </div>
        
<div class="main-content">

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="10"><a href="user.php?page=user">Add user</a></td>
	</tr>
	<Tr class="active">
        <th>#</th>
		<th>Exercise Books</th>
		<th>Text Books</th>
		<th>Writting Pens</th>
		<th>writting Pencil</th>
        <th>Talking calculators</th>
        <th>Date of allocation</th>

        
		
		<!--<th>Update</th>-->
		
	</Tr>
    <?php
                  $result=mysqli_query($conn,"select * from resources");;
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['exercise']."</td>
                    <td>".$row['textu']."</td>
                    <td>".$row['pens']."</td>  
                    <td>".$row['pencil']."</td>
                    <td>".$row['calculators']."</td>
                     <td>".$row['reg_date']."</td>
                   
                   </tbody>
                    "
                  ;
                }
            ?>
    </Tr>

</table>
      <div class="header"> 
            <h1 class="page-title">RESOURCES ALLOCATED FOR SECONDARY SCHOOLS</h1>
                    
<ul class="breadcrumb">
            <li><a href="#">Home</a> </li>

        </ul>

        </div>
        
<div class="main-content">

<table class="table table-bordered">
    
    
    <tr>
       
    </tr>
    <Tr class="active">
        <th>#</th>
        <th>Exercise Books</th>
        <th>Text Books</th>
        <th>Writting Pens</th>
        <th>Talking calculators</th>
        <th>Date of allocation</th>

        
        
        <!--<th>Update</th>-->
        
    </Tr>
    <?php
                  $result=mysqli_query($conn,"select * from resources");;
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['exercise_s']."</td>
                    <td>".$row['text_s']."</td>
                    <td>".$row['pens_s']."</td>  
                    <td>".$row['calculators_s']."</td>
                     <td>".$row['reg_date']."</td>
                   
                   </tbody>
                    "
                  ;
                }
            ?>
    </Tr>

</table>