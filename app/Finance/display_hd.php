<?php 
session_start();

include('connection.php');
	

$sql=mysqli_query($conn,"select * from head");
$rr=mysqli_num_rows($sql);
if(!$rr)
{
echo "<h2 style='color:green'>No user records !!!</h2>";
echo "<a style='text-decoration:underline' href='user.php?page=add_group'>Add New  ?</a>";
}
else
{
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
    
<title>Admin</title>
    
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
            
<li><a href="index.php"><span class="fa fa-caret-right"></span> Main</a></li>
            <li ><a href="Manage users.html"><span class="fa fa-caret-right">
</span> Manage users</a></li>
            <li class="active"><a href="user.html"><span class="fa fa-caret-right"></span> User Profile</a></li>    
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
            <h1 class="page-title">REGISTER NEW </h1>
                    
<ul class="breadcrumb">
            <li><a href="index.html">Home</a> </li>
<li><a href="users.html">Users</a> </li>
        </ul>

        </div>
        
<div class="main-content">
            
<h2 style="color:#00FFCC">employees</h2>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="10"><a href="user.php?page=user">Add user</a></td>
	</tr>
	<Tr class="active">
        <th>#</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Username</th>
        <th>Password</th>
        <th>Status</th>
        <th>Approve</th>
        <th>Delete</th>
        
		
		<!--<th>Update</th>-->
		
	</Tr>
		<?php
         error_reporting(1);
         $rec_limit =15;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(Ca_Id) FROM head ";
         $retval = mysqli_query($conn,$sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         $row = mysqli_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'pagi'} ) ) {
            $pagi = $_GET{'pagi'} + 1;
            $offset = $rec_limit * $pagi ;
         }else {
            $pagi = 0;
            $offset = 0;
         }
         
		 
         $left_rec = $rec_count - ($pagi * $rec_limit);
         $sql = "SELECT * ". "FROM head ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query($conn, $sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         
         $inc=1;
		 while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
		  {
		  
           echo "<Tr>";
echo "<td>".$inc."</td>";
echo "<td>".$row['first_name']."</td>";
echo "<td>".$row['last_name']."</td>";
echo "<td>".$row['email_address']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td>".$row['status']."</td>";
 a

?>

<Td><a href="aprove.php?accept=<?php echo $row['Ca_Id'];?>"
 class="btn btn-primary"><i class="fa fa-edit "></i>Approve</button> </a>                                       
<Td><a href="delete.php?reject=<?php echo $row['Ca_Id']; ?>"
 class="btn btn-danger"><i class="fa fa-edit "></i>Delete user</button> </a> 


<Td><a href="javascript:Delete('<?php echo $row['Ca_Id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'>
</span></a></td>

<?php 

echo "</Tr>";
$inc++;
}

//for shoing Pagination

echo "<tr><td colspan='15'>";
if( $pagi > 0 )
 {
         $last = $pagi - 2;
      echo "<a href = \"index.php?page=display&pagi=$last\">Last 10 Records</a> |";
        echo "<a href = \"index.php?page=display&pagi=$pagi\">Next 10 Records</a>";
         
		 }
		 else if( $pagi == 0 )
		  {
     echo "<a href = \"index.php?page=display&pagi=$pagi\">Next 10 Records</a>";
         }
		 else if( $left_rec < $rec_limit ) {
            $last = $pagi - 2;
            echo "<a href = \"index.php?page=display&pagi=$last\">Last 10 Records</a>";
         }
        echo "</td></tr>"; 
		?>
		
</table>
<?php }?>