<?php 
session_start();

include('connection.php');
	

$sql=mysqli_query($conn,"select * from payments");
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
    
<title>FINANCE</title>
    
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
                    

              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    



    <div class="content">
<div class="header"> 
            <h1 class="page-title">TRANSACTION SERVICE</h1>
                    
<ul class="breadcrumb">
            <li><a href="index.php">Home</a> </li>

        </ul>

        </div>
        
<div class="main-content">
            
<h2 style="color:#00FFCC">transaction</h2>


<html>
<head>
<title> Search </title>


        <style>

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 25px;
}

input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 25px;
}

input[type=submit] {
    width: 100%;
    padding: 12px 20px;
    background-color: darkgreen;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 25px;
}

button{
    
    padding: 12px 20px;
   text-align: right;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 25px;
}

fieldset
{
    border-radius: 25px;
    
}
p {
    text-align: center;
    color: rgb(235, 238, 235);
    background: black;
    font-size: 25px;
    margin-top: 4px;
    border-radius: 25px 32px 25px 329px;
}

                </style>
</head>
<body>
    <fieldset>
<form action="" method="POST" >
 <input type="number" name="id_number" placeholder="Enter ID Number To Search">
 <input type="submit" name="search" value="search data">


 </form>
 <?php

$conn= mysqli_connect('localhost','root','','BUSIA');

if(isset($_POST['search']))
{
    $id_number = $_POST['id_number'];

    $query = " SELECT * FROM payments WHERE id_number ='$id_number' ";
    $query_run = mysqli_query($conn , $query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>

        <form action="" method="POST">
        <input type="hidden" name="id_number" value="<?php echo $row['id_number'] ?>"/>
       <p>Service type:</p>
       <input type="text" name="service" value="<?php echo $row['service'] ?>"/>
        <p>Amount paid:</p>
        <input type="text" name="amount" value="<?php echo $row['amount'] ?>"/>
        <p>Date and time:</p>
        <input type="text" name="reg_date" value="<?php echo $row['reg_date'] ?>"/>

        <?php
    }
}

 ?>
 </fieldset>
</body>
</html>

<table class="table table-bordered">
	
	
	<tr>
		<td colspan="10"><a href="user.php?page=user">Add user</a></td>
	</tr>
	<Tr class="active">
        <th>#</th>
		<th>Id number</th>
        <th>Service</th>
        <th>Amount</th>
        <th>Date </th>
		
		<!--<th>Update</th>-->
		
	</Tr>
		<?php
         error_reporting(1);
         $rec_limit =15;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(P_id) FROM payments ";
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
         $sql = "SELECT * ". "FROM payments ".
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
echo "<td>".$row['id_number']."</td>";
echo "<td>".$row['service']."</td>";
echo "<td>".$row['amount']."</td>";
echo "<td>".$row['reg_date']."</td>";

 a

?>
   
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