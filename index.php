<?php
session_start();
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <?php
    if(isset($_POST['login']))
       {
        $email=$_POST['email'];  
        $password=$_POST['password'];

        $result=$mysqli->query("SELECT * FROM admin where email='$email' AND password='$password'") or die($mysqli->error);
        $row=$result->fetch_assoc();
        $count=mysqli_num_rows($result);
              
              if($count==1)
        {
         		
         $_SESSION['login_user'] =$email;
         header('location:Admin/main.php');

            echo "
                  span style='color: Green;'>
                    Sucess
                  </span>;
                    <script>
                  location.replace('Admin/main.php');
                   </script>
                   ";

        }
        elseif($count!==1)
        {
            echo "<center><span  class='panel panel-sucess' style='color: Red;z-index:10'>
                   <h3> Wrong Credentials <h3>
                  </span></center>
                
                   ";

        }


    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doe Login Portal</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <?php
                    if(isset($_POST['email']))
                    {
                        $email=$_POST['email'];                     
                    }
                    if(isset($_POST['password']))
                    {
                        $password=$_POST['password'];
                    }
                    ?>
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">DOE PORTAL</h2>
                       
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                      
                     
                        <div class="form-group">
                            <input type="submit" name="login" id="submit" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                  
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
       
 $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>