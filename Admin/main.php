
<?php
include('session.php')
?>
<!doctype html>
<html lang="en">
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
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            
<span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
 <span class="icon-bar"></span>
<span class="icon-bar"></span>
          
</button>
 
        
 <a class="" href="index.php"><span class="navbar-brand">
 </span></a></div>

<div class="navbar-collapse collapse" style="height: 1px;">
<ul id="main-menu" class="nav navbar-nav navbar-right">
<li class="dropdown hidden-xs">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    
<span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"><span><?php echo $login_session ?></span>             
 <i class="fa fa-caret-down"></i>
                </a>

              
<ul class="dropdown-menu">
<li><a tabindex="-1" href="messages.php">Messages</a></li> 
<li><a tabindex="-1" href="logout.php">Logout</a></li>
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
    <div class="content">
        <div class="header">
            
<div class="stats">
       
<p class="stat"><span class="label label-success">27</span> Tasks</p>
<p class="stat"><span class="label label-danger">15</span> Overdue</p>
</div>

        
<h1 class="page-title">Dashboard</h1>
                    
<ul class="breadcrumb">
            
<a href="sms.php">Read Messages</a> </li>
<h2 class="page-title"><a href="notice.php">Notification</a></h2>
            
<li class="active">Dashboard</li>
        </ul>

        </div>
        
<div class="main-content">
            




    
<div class="panel panel-default">
        <a href="#page-stats" class="panel-heading" data-toggle="collapse">Latest Stats</a>
        
<div id="page-stats" class="panel-collapse panel-body collapse in">

                    
<div class="row">
                        
<div class="col-md-3 col-sm-6">
                            
<div class="knob-container">
                                
<input class="knob" data-width="200" data-min="0" data-max="3000" data-displayPrevious="true" value="25" data-fgColor="#92A3C2" data-readOnly=true;>
                                <h3 class="text-muted text-center">Accounts</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <input class="knob" data-width="200" data-min="0" data-max="4500" data-displayPrevious="true" value="3299" data-fgColor="#92A3C2" data-readOnly=true;>
                                <h3 class="text-muted text-center">Subscribers</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                                <input class="knob" data-width="200" data-min="0" data-max="2700" data-displayPrevious="true" value="1840" data-fgColor="#92A3C2" data-readOnly=true;>
                               
 <h3 class="text-muted text-center">Pending </h3>
                            
</div>
                        
</div>
                        

<div class="col-md-3 col-sm-6">
                            
<div class="knob-container">
                                
<input class="knob" data-width="200" data-min="0" data-max="15000" data-displayPrevious="true" value="67" data-fgColor="#92A3C2" data-readOnly=true;>
 
<h3 class="text-muted text-center">Completed</h3>
                            
</div>
                        
</div>
                    
</div>
        
</div>
    
</div>


<div class="row">
    
<div class="col-sm-6 col-md-6">
        
<div class="panel panel-default">
            
<div class="panel-heading no-collapse">Not Collapsible<span class="label label-warning">+10</span></div>
            

<table class="table table-bordered table-striped">
              
<thead>
                
<tr>
                  
<th>First Name</th>
                  
<th>Last Name</th>
                  
<th>Username</th>
                
</tr>
              
</thead>
              

<tbody>
                
<tr>
                  
<td>wafula</td>
                  
<td>chebukati</td>
                  
<td>wafulachebukati@gmail</td>
                
</tr>
                

<tr>
                  
<td>james</td>
                  
<td>ouma</td>
                  
<td>oumers@gmail.com</td>
                
</tr>
                

<tr>
                  
<td>Cosmos</td>
                  
<td>Obora</td>
                  
<td>obora84</td>
                
</tr>
                

<tr>
                  
<td>Hellen</td>
                  
<td>Ongamo</td>
                  
<td>jr5527</td>
                
</tr>
                

<tr>
                 
 <td>victor</td>
                  
<td>Lumumba</td>
                  
<td>VLumumba@gmail</td>
                
</tr>
 
               
<tr>
                 
 <td>Chris</td>
                  
<td>Albert</td>
                  
<td>cab79</td>
                
</tr>
 
             
</tbody>
            
</table>
  
      
</div>
    </div>

    
<div class="row">
    
    <div class="col-sm-6 col-md-6">
            
    <div class="panel panel-default">
                
    <div class="panel-heading no-collapse">Manage users<span class="label label-warning">+10</span></div>

    
    <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        
</head>
<body>

<ul>

  <li ><a href="display_hd.php"> Head Teachers </a></li>
  <li ><a href="display_staff.php"> Quality Assurance</a></li>


</ul>
   
</ul>
</body>
</html>
    
   
<script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
       
 $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  

</body></html>
