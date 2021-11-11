<?php
session_start();
include('connection.php');
if(isset($_GET["accept"])){
        
            $Ca_Id=$_GET["accept"];
            $sql=mysqli_query($conn,"update head set status ='approved' where Ca_Id = '$Ca_Id'"); 
            if (!$sql) { 
                die (mysqli_error($conn));
                }

else {
echo "Account successfully created...  <a href= 'index.php'>Back </a>";
}
        
    }
           
    ?>
    