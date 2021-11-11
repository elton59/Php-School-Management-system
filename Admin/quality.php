

<?php

session_start();

?>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

 

  <!-- Tell the browser to be responsive to screen width -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="..files/plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="..files/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bbootstrap 4 -->

  <link rel="stylesheet" href="../files/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- iCheck -->

  <link rel="stylesheet" href="../files/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- JQVMap -->

  <link rel="stylesheet" href="../files/plugins/jqvmap/jqvmap.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="../files/dist/css/adminlte.min.css">

  <!-- overlayScrollbars -->

  <link rel="stylesheet" href="../files/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="../files/plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->

  <link rel="stylesheet" href="../files/plugins/summernote/summernote-bs4.css">

  <!-- Google Font: Source Sans Pro -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>

    h1{

    width: 100%;

    padding: 12px 20px;

    background-color: darkgreen;

    margin: 8px 0;

    font-size:14;

    color: white;

    box-sizing: border-box;

    border-radius: 25px;

}



</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

 

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

           

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->

        <div class="row">

          <div class="col-12">

          <div class="card">

            <div class="card-header">

           

          </div>

          <div class="card-body">

         

                   <form  style="height:400px;overflow-y:auto;" action="quolity.php" method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">

               

                      <div class="form-group">

                     

                           

<h1 for="schools">Select school name:</h1>



<select name="schools" id="schools">

  <option value="St. Francis Rang'ala Girls Secondary"> St. Francis Rangala Girls Secondary</option>

  <option value="Rang'ala Boys Secondary"> Rangala Boys Secondary</option>

  <option value="Simenya Secondary"> Simenya Secondary</option>

  <option value="Madungu Secondary Sch"> Madungu Secondary Sch</option>

  <option value="Sidindi Secondary"> Sidindi Secondary</option>

  <option value="St. Paul's Sigomre Secondary Sch"> St. Pauls Sigomre Secondary Sch</option>

  <option value="Gospel Mission Academy Secondary"> Gospel Mission Academy Secondary</option>

  <option value="Ugunja primary school"> Ugunja primary school</option>

  <option value="Nyasanda primary school"> Nyasanda primary school</option>

</select>



                <h1>Maintainance of school Accounting books of record</h1>   

                  Better<input type="radio" name="accounts" value ="Better"   autofocus required>

                   Good <input type="radio" name="accounts" value ="Good" autofocus required>   

                   Poor.<input type="radio" name="accounts" value ="Poor"  autofocus required> <br/main

                   >

                   <textarea name="reason1" class="form-control" placeholder="Reason for your review" required></textarea>

                             

<h1>Learners welfare and participation (gender, guidance and counseling, club and games) </h1>

          Better<input type="radio" name="welfare" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="welfare" value ="Good"   autofocus required   >  

                    Poor. <input type="radio" name="welfare" value ="Poor"    autofocus required  >  

 <br/><br/>

                   <textarea name="reason2"   class="form-control" placeholder="Reason for your review" required></textarea>



 <h1>Added value in education(improvement in teaching and learning) </h1>

          Better<input type="radio" name="value" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="value" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="value" value ="Poor"  autofocus required  > <br/><br/> 

                     <textarea name="reason3" class="form-control" placeholder="Reason for your review" required></textarea>

<p></p>



<h1>Special Need curriculum </h1>

          Better<input type="radio" name="Special" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="Special" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="Special" value ="Poor"  autofocus required  >  

  <br/><br/>

                   <textarea name="reason4" class="form-control" placeholder="Reason for your review" required></textarea>

<h1>Adopted curriculum </h1><br>

          Better<input type="radio" name="adopted" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="adopted" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="adopted" value ="Poor"  autofocus required  >  

 <br/><br/>

                   <textarea name="reason5" class="form-control" placeholder="Reason for your review" required></textarea>

<h1>Standards Assessments </h1>

          Better<input type="radio" name="standards" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="standards" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="standards" value ="Poor"  autofocus required  >  

      

 <br/><br/>

                   <textarea name="reason6" class="form-control" placeholder="Reason for your review" required></textarea>

 <h1>Teachers having appropriate academic and professional qualifications </h1>

          Better<input type="radio" name="professionality" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="professionality" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="professionality" value ="Poor"  autofocus required  >  

                     <br/><br/>

                   <textarea name="reason7" class="form-control" placeholder="Reason for your review" required></textarea>

 <p></p>

 <h1>Proper facilities and resources </h1>

          Better<input type="radio" name="resources" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="resources" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="resources" value ="Poor"  autofocus required  > 

                    <br/><br/>

                   <textarea name="reason8" class="form-control" placeholder="Reason for your review" required></textarea>

 <p></p>

 <h1>Administrative Experience and curriculum management</h1>

          Better<input type="radio" name="management" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="management" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="management" value ="Poor"  autofocus required  ><br/><br/>

                      <textarea name="reason9" class="form-control" placeholder="Reason for your review" required></textarea>                     



 <h1>Management and competence</h1>

          Better<input type="radio" name="competence" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="competence" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="competence" value ="Poor"  autofocus required  > 

                     <br/><br/>

                   <textarea name="reason10" class="form-control" placeholder="Reason for your review" required></textarea>



                    

 <h1>Professional training and curriculum management</h1>

          Better<input type="radio" name="training" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="training" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="training" value ="Poor"  autofocus required  > 

                     <br/><br/>

                   <textarea name="reason11" class="form-control" placeholder="Reason for your review" required></textarea>

                

<br/>

                <h1>Date of collection</h1>

          <input type="date" name="cldate"   autofocus required   /> 

          <br/><br/>

                   

                <input type="submit" value="Send" class="btn btn-success" >



                               

                              </form>

              </div>

            </div>

          </div>

        </div>

          </section>

          <!-- right col -->

        </div>

        <!-- /.row (main row) -->

      </div><!-- /.container-fluid -->

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <strong>Copyright &copy;  <a href="http://nancy.html">Elton@2020</a>.</strong>

    All rights reserved.

    <div class="float-right d-none d-sm-inline-block">

    

    </div>

  </footer>



  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

  </aside>

  <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->



<!-- jQuery -->

<script src="plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>

<!-- Bootstrap 4 -->

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ChartJS -->

<script src="plugins/chart.js/Chart.min.js"></script>

<!-- Sparkline -->

<script src="plugins/sparklines/sparkline.js"></script>

<!-- JQVMap -->

<script src="plugins/jqvmap/jquery.vmap.min.js"></script>

<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- jQuery Knob Chart -->

<script src="plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- daterangepicker -->

<script src="plugins/moment/moment.min.js"></script>

<script src="plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->

<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Summernote -->

<script src="plugins/summernote/summernote-bs4.min.js"></script>

<!-- overlayScrollbars -->

<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE App -->

<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="dist/js/pages/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js"></script>

</body>

</html>

<?php



 error_reporting(0);

include('conn.php');

include('sidenav.php');





?>

<!DOCTYPE html>

<html>

<head>

  <title>Report From QR</title>

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



        <div class="panel-heading"><center>Report From Quality Assuarance</center></div>

           <div class="col-sm-6">

</div>





        <div class="panel-body">

          <fieldset>

  <form  style="height:400px;overflow-y:auto;" action="quolity.php" method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">

               

                      <div class="form-group">

                     

                           

<h1 for="schools">Select school name:</h1>



<select name="schools" id="schools">

  <option value="St. Francis Rang'ala Girls Secondary"> St. Francis Rangala Girls Secondary</option>

  <option value="Rang'ala Boys Secondary"> Rangala Boys Secondary</option>

  <option value="Simenya Secondary"> Simenya Secondary</option>

  <option value="Madungu Secondary Sch"> Madungu Secondary Sch</option>

  <option value="Sidindi Secondary"> Sidindi Secondary</option>

  <option value="St. Paul's Sigomre Secondary Sch"> St. Pauls Sigomre Secondary Sch</option>

  <option value="Gospel Mission Academy Secondary"> Gospel Mission Academy Secondary</option>

  <option value="Ugunja primary school"> Ugunja primary school</option>

  <option value="Nyasanda primary school"> Nyasanda primary school</option>

</select>



                <h1>Maintainance of school Accounting books of record</h1>   

                  Better<input type="radio" name="accounts" value ="Better"   autofocus required>

                   Good <input type="radio" name="accounts" value ="Good" autofocus required>   

                   Poor.<input type="radio" name="accounts" value ="Poor"  autofocus required> <br/main

                   >

                   <textarea name="reason1" class="form-control" placeholder="Reason for your review" required></textarea>

                             

<h1>Learners welfare and participation (gender, guidance and counseling, club and games) </h1>

          Better<input type="radio" name="welfare" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="welfare" value ="Good"   autofocus required   >  

                    Poor. <input type="radio" name="welfare" value ="Poor"    autofocus required  >  

 <br/><br/>

                   <textarea name="reason2"   class="form-control" placeholder="Reason for your review" required></textarea>



 <h1>Added value in education(improvement in teaching and learning) </h1>

          Better<input type="radio" name="value" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="value" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="value" value ="Poor"  autofocus required  > <br/><br/> 

                     <textarea name="reason3" class="form-control" placeholder="Reason for your review" required></textarea>

<p></p>



<h1>Special Need curriculum </h1>

          Better<input type="radio" name="Special" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="Special" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="Special" value ="Poor"  autofocus required  >  

  <br/><br/>

                   <textarea name="reason4" class="form-control" placeholder="Reason for your review" required></textarea>

<h1>Adopted curriculum </h1><br>

          Better<input type="radio" name="adopted" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="adopted" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="adopted" value ="Poor"  autofocus required  >  

 <br/><br/>

                   <textarea name="reason5" class="form-control" placeholder="Reason for your review" required></textarea>

<h1>Standards Assessments </h1>

          Better<input type="radio" name="standards" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="standards" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="standards" value ="Poor"  autofocus required  >  

      

 <br/><br/>

                   <textarea name="reason6" class="form-control" placeholder="Reason for your review" required></textarea>

 <h1>Teachers having appropriate academic and professional qualifications </h1>

          Better<input type="radio" name="professionality" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="professionality" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="professionality" value ="Poor"  autofocus required  >  

                     <br/><br/>

                   <textarea name="reason7" class="form-control" placeholder="Reason for your review" required></textarea>

 <p></p>

 <h1>Proper facilities and resources </h1>

          Better<input type="radio" name="resources" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="resources" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="resources" value ="Poor"  autofocus required  > 

                    <br/><br/>

                   <textarea name="reason8" class="form-control" placeholder="Reason for your review" required></textarea>

 <p></p>

 <h1>Administrative Experience and curriculum management</h1>

          Better<input type="radio" name="management" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="management" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="management" value ="Poor"  autofocus required  ><br/><br/>

                      <textarea name="reason9" class="form-control" placeholder="Reason for your review" required></textarea>                     



 <h1>Management and competence</h1>

          Better<input type="radio" name="competence" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="competence" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="competence" value ="Poor"  autofocus required  > 

                     <br/><br/>

                   <textarea name="reason10" class="form-control" placeholder="Reason for your review" required></textarea>



                    

 <h1>Professional training and curriculum management</h1>

          Better<input type="radio" name="training" value ="Better"  autofocus required  > 

                    Good <input type="radio" name="training" value ="Good" autofocus required   >  

                    Poor. <input type="radio" name="training" value ="Poor"  autofocus required  > 

                     <br/><br/>

                   <textarea name="reason11" class="form-control" placeholder="Reason for your review" required></textarea>

                

<br/>

                <h1>Date of collection</h1>

          <input type="date" name="cldate"   autofocus required   /> 

          <br/><br/>

                   

                <input type="submit" value="Send" class="btn btn-success" >



                               

                              </form>

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





</body>

</html>