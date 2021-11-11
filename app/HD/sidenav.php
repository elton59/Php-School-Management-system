
 <?php
include('conn.php');
include('session.php');
?>
<head>
<meta charset="utf-8">
<title>HEADTEACHER</title>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    
<span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> <?php echo $login_session ?>                 
 <i class="fa fa-caret-down"></i>
                </a>

              
<ul class="dropdown-menu">
                
<li><a href="main.php">Home</a></li>
                
<li class="divider"></li>
               
<li><a tabindex="-1" href="messages.php">Messages</a></li>
<li><a tabindex="-1" href="logout.php">Logout</a></li>
              </ul>
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            
<span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
 <span class="icon-bar"></span>
<span class="icon-bar"></span>
         
</button>
    </div>
    <div class="navbar-collapse collapse" style="height: 1px;">
<ul id="main-menu" class="nav navbar-nav navbar-right">
<li class="dropdown hidden-xs">

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

    <li ><a href="staff.php"><span class="fa fa-caret-right"></span> Report from Quality Assuarance officer </a></li>
    </ul></li>

    <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Examination  
<span class="label label-info">+3</span></a></li>

<li ><a href="exams.php"><span class="fa fa-caret-right"></span> Upload exams Result</a></li>
<li ><a href="suploads"><span class="fa fa-caret-right"></span>View Secondary schools Results  </a></li>
<li ><a href="uploads"><span class="fa fa-caret-right"></span> View  Primary schools Results </a></li>
<li ><a href="viewexamshedule.php"><span class="fa fa-caret-right"></span>View Exam Schedule </a></li>
    </ul></li>

    
    <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Events 
<span class="label label-info">+3</span></a></li>

<li ><a href="sport.php"><span class="fa fa-caret-right"></span>View Events </a></li>

    </ul></li>
    
    <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Allocations 
<span class="label label-info">+3</span></a></li>

    <li ><a href="resources.php"><span class="fa fa-caret-right"></span> Resource allocations </a></li>
<li ><a href="funds.php"><span class="fa fa-caret-right"></span> Funds allocations </a></li>
    </ul></li>

    <li><ul class="dashboard-menu nav nav-list collapse in">
<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Schools Requests
<span class="label label-info">+3</span></a></li>
   <li ><a href="funding.php"><span class="fa fa-caret-right"></span> Request Project funds </a></li>
<li ><a href="special.php"><span class="fa fa-caret-right"></span>  Request Special Education  </a></li>
    <li ><a href="fundi.php"><span class="fa fa-caret-right"></span> Project funds status </a></li>
<li ><a href="speci.php"><span class="fa fa-caret-right"></span> Special Education status  </a></li>
    </ul></li>
    
            </ul>
    </div>
