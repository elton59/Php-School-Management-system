<?php
include('session.php');
?>
<head>
<meta charset="utf-8">
<title>DOE</title>
   
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
<link rel="icon" href="../odhil.png"  type="image/icon type">
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
<a href="main.php"><span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>HOME </a>               
    </div>
      </div>
    </div>
    
<div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse">
<i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
<li><ul class="dashboard-menu nav nav-list collapse in">

 <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Quality Assurance report 
<span class="label label-info">+3</span></a></li>

    <li ><a href="staff.php"><span class="fa fa-caret-right"></span> Report from Quality Assuarance Officer </a></li>
    </ul></li>

    <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Examination  
<span class="label label-info">+3</span></a></li>

<li ><a href="../app/HD\suploads"><span class="fa fa-caret-right"></span>Secondary schools Results  </a></li>
<li ><a href="../app/HD\uploads"><span class="fa fa-caret-right"></span> Primary schools Results </a></li>
<li ><a href="viewexamshedule.php"><span class="fa fa-caret-right"></span> View Scheduled Exams </a></li>
    </ul></li>

    
    <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Events 
<span class="label label-info">+3</span></a></li>
<li ><a href="schedule.php"><span class="fa fa-caret-right"></span> Events Scheduling </a></li>
<li ><a href="sport2.php"><span class="fa fa-caret-right"></span> View  events </a></li>
<li ><a href="sport.php"><span class="fa fa-caret-right"></span> Edit  events </a></li>
    </ul></li>
  
    
    <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Allocations 
<span class="label label-info">+3</span></a></li>

    <li ><a href="resources.php"><span class="fa fa-caret-right"></span> Resource allocations </a></li>
<li ><a href="funds.php"><span class="fa fa-caret-right"></span> Funds allocations </a></li>
<li ><a href="allocationstatus.php"><span class="fa fa-caret-right"></span> View allocations status </a></li>
    </ul></li>

    <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i>  Requests
<span class="label label-info">+3</span></a></li>

    <li ><a href="fundi.php"><span class="fa fa-caret-right"></span> Project funds </a></li>
<li ><a href="speci.php"><span class="fa fa-caret-right"></span> Special Education  </a></li>
    </ul></li>
     <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i>  Manage Users
<span class="label label-info">+3</span></a></li>
<li ><a href="users.php"><span class="fa fa-caret-right"></span> Manage Users </a></li>  
<li ><a href="usersf.php"><span class="fa fa-caret-right"></span> Add finance </a></li>  
<li ><a href="usersc.php"><span class="fa fa-caret-right"></span> add  Course panel officer </a></li>  
<li ><a href="usersp.php"><span class="fa fa-caret-right"></span> add   Cirriculumn supervisor</a></li>  
            </ul>
    </div>
