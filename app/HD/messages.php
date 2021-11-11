<?php

 error_reporting(0);
include('conn.php');
include('sidenav.php');


?>
<!DOCTYPE html>
<html>
<head>
  <title>Messahes</title>
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
         <div class="panel-heading"><center> Send A Message</center></div>
           <div class="col-sm-6">
        </div>
         
        <form style="background-image:url('hand.jpg')" method="POST" action="sendm.php">
           
            <label>Role</label>
            <input type="text" name="role" value="HeadTeacher"  readonly/>
           <center> <label>Sender</label></center>
             <input type="text" name="sfrom" value="<?php echo $login_session?>"  readonly/>
           <center> <label>Select Repecients</label></center>
             <select name="res" class="form-control">
                 <option value="DOE">DOE</option>
                 <option value="FinanceManager">FinanceManager</option>
                 <option value="QualityAssuaranceOfficer">QualityAssuaranceOfficer</option>
                 <option value="CourcePanelChairperson">CourcePanelChairperson</option> 
                 <option value="QualityAssuaranceOfficer">QualityAssuaranceOfficer</option>
                 <option value="InternalCurriculumSupervison">InternalCurriculumSupervison</option>  
                  
             </select>
             <center><label>Message</label></center>
            <input type="text" name="msg" placeholder="your message goes here" />
            <input type='submit' class='btn btn-primary' value='send Message' name='sendm'/>
        </form>

        <div class="panel-heading"><center> All Messages</center></div>
           <div class="col-sm-6">
</div>


        <div class="panel-body">
        	<fieldset>
           <div class="table-responsive ps">
               <h1>Sent Messages</h1>
         <table id="sport" class="table table-responsive ps ">
                      <thead>
                        <tr><th>Recepient</th><th>Message</th><th>Date</th>
                     </tr>
                      </thead>
                      
                      <?php
                  $result=$mysqli->query("select * from feedback where  sentfrom='HeadTeacher'")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                    <td>".$row['sentto']."</td>
                    <td>".$row['message']."</td>  
                    <td>".$row['reg_date']."</td>  
                  
                   
                   </tbody>
                    "
                  ;}
                
                
            ?>
</table>


   
  
     <button onclick="fnExcelReport()" class="btn btn-success" >Export to Excel</a></td>



    </div>
      <div class="table-responsive ps">
               <h1>Received Messages</h1>
         <table id="sport" class="table table-responsive ps ">
                      <thead>
                        <tr><th>Sender</th><th>Role</th><th>Message</th><th>Date</th>
                     </tr>
                      </thead>
                      
                      <?php
                  $result=$mysqli->query("select * from feedback where  sentto='HeadTeacher'")or die($mysqli->error);
                  $row=$result->fetch_assoc();
                  while($row=$result->fetch_assoc())
                  {
                      
                    echo

                    "
                    <tbody>
                    <td>".$row['email']."</td>
                    <td>".$row['sentfrom']."</td>
                    <td>".$row['message']."</td>  
                    <td>".$row['reg_date']."</td>  
                  
                   
                   </tbody>
                    "
                  ;}
                
                
            ?>
</table>


   
  
     <button onclick="window.print()" class="btn btn-success" >Export kkto Excel</a></td>



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
<script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
       
 $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
      <script type="text/javascript">
function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('sport'); // id of table

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

</body>
</html>