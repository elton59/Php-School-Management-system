<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UGUNJA DOE MOBILE APP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="main">
     
        

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
               
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Ugunja DOE Mobile App</h2>
                       <h2> Select User To Continue:</h2>
                        <div class="form-group">
                          <a href="https://ugunjadoe.000webhostapp.com/app/HD/"><p class="form-submit">HeadTeacher</p></a>
                        </div>
                     <div class="form-group">
                            <a href="https://ugunjadoe.000webhostapp.com/app/Finance"><p class="form-submit">Finance Manager</p></a>
                        </div>
                     
                        <div class="form-group">
                            <a href="https://ugunjadoe.000webhostapp.com/app/staff"><p class="form-submit">Quality Assuarance Officer</p></a>
                        </div>
                        <div class="form-group">
                            <a href="https://ugunjadoe.000webhostapp.com/app/coursepanelchairperson/index.php"><p class="form-submit">Course Panel Chairperson</p></a>
                        </div>
                        <div class="form-group">
                            <a href="https://ugunjadoe.000webhostapp.com/app/INTERNALCURRICULUMSUPERVISOR/"><p class="form-submit">Internal Curriculum supervisor</p></a>
                        </div>
                    </form>
                  
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
       
 $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>