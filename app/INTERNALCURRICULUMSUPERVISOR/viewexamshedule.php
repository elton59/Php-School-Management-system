<?php

 error_reporting(0);
include('conn.php');
include('sidenav.php');


?>
<!DOCTYPE html>
<html>
<head>
  <title>Sport Events</title>
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

        <div class="panel-heading"><center>Exams Shedule</center></div>
           <div class="col-sm-6">
</div>


        <div class="panel-body">
          <fieldset>
<form action="" method="POST" >

 <input type="text" name="school_name" placeholder="Search school">
 <input type="submit" name="search" value="search data">

 </form>
 <?php
if(isset($_POST['search']))
{
    if( isset($_GET['school_name']))
   {
    $school_name=$_GET['school_name'];
    $query = " SELECT  * FROM quality WHERE id LIKE '$school_name'";
    While($row=$query->fetch_assoc())
    {
     echo 

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['School_name']."</td>
                    <td>".$row['school_id']."</td>
                    <td>".$row['accounts']."</td>  
                    <td>".$row['Accounts_reason']."</td>  
                    <td>".$row['welfare']."</td>
                    <td>".$row['welfare_reason']."</td>
                    <td>".$row['value']."</td>
                    <td>".$row['value_reason']."</td>
                    <td>".$row['special']."</td>
                    <td>".$row['special_reason']."</td>
                    <td>".$row['adopted']."</td>
                    <td>".$row['adopted_reason']."</td>
                    <td>".$row['standards']."</td>
                    <td>".$row['standard_reason']."</td>
                    <td>".$row['professionality']."</td>
                    <td>".$row['professionality_reason']."</td>
                    <td>".$row['resources']."</td>
                    <td>".$row['resources_reason']."</td>
                    <td>".$row['management']."</td>
                    <td>".$row['management_reason']."</td>
                    <td>".$row['competence']."</td>
                    <td>".$row['competence_reason']."</td>
                    <td>".$row['training']."</td>
                    <td>".$row['training_reason']."</td>
                    <td>".$row['reg_date']."</td>
                      <td>".$row['status']."</td>
                    
                   
                   </tbody>
                    ";
    }
}
}

   
    ?>
    
           <div class="table-responsive ps">
         <table id="t1" class="table table-responsive ps ">
                      <thead>
                        <h1>Term 1</h1>
                        <tr><th>ID</th><th>Primary</th><th>Secondary</th><th>Date</th>
                    
                      </thead>
                      
                      <?php
                  $result=$mysqli->query("select * from exams")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['primary_1']."</td>
                    <td>".$row['secondary_1']."</td>
                    <td>".$row['reg_date']."</td>  
                    
                   
                   </tbody>
                    "
                  ;}
                
                
            ?>
</table>
<table id="t2" class="table table-responsive ps ">
                      <thead>
                        <h1>Term 2</h1>
                        <tr><th>ID</th><th>Primary</th><th>Secondary</th><th>Date</th>
                    
                      </thead>
                      
                      <?php
                  $result=$mysqli->query("select * from exams")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['primary_2']."</td>
                    <td>".$row['secondary_2']."</td>
                    <td>".$row['reg_date']."</td>  
                    
                   
                   </tbody>
                    "
                  ;}
                
                
            ?>
</table>
<table id="t3" class="table table-responsive ps ">
                      <thead>
                        <h1>Term 3</h1>
                        <tr><th>ID</th><th>Primary</th><th>Secondary</th><th>Date</th>
                    
                      </thead>
                      
                      <?php
                  $result=$mysqli->query("select * from exams")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['primary_3']."</td>
                    <td>".$row['secondary_3']."</td>
                    <td>".$row['reg_date']."</td>  
                    
                   
                   </tbody>
                    "
                  ;}
                
                
            ?>
</table>




   
  
     <button onclick="fnExcelReport()" class='btn btn-success'>Export to Term1 to excel</a></td>
<button onclick="fnExcelReport()"  class='btn btn-success'>Export  term 2  to excel</a></td>
<button onclick="fnExcelReport()"  class='btn btn-success'>Export term 3 excel</a></td>



    </div>
    <?php

    if(isset($_GET['asid']))
  {
    $id=$_GET['asid'];
    $result=$mysqli->query("UPDATE quality SET STATUS='received'  where id='$id'")or die($mysqli->error);
    
  }   
   if(isset($_GET['rjsid']))
  {
    $id=$_GET['rjsid'];
    $result=$mysqli->query("UPDATE quality SET STATUS='rejected'  where id='$id'")or die($mysqli->error);
    
  }
    
     
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>
<script>
function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('t1'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
</script>
<script>
function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('t2'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
</script>
<script>
function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('t3'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
</script>
<script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
       
 $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>


</body>
</html>