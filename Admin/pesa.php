<?php



//check connection

//host name
$host = "localhost";
//user name
$username = "id16401478_root";
//database password
$password = "&flC)*gbE4OF2b8-";
//database name
$database ="id16401478_odhil";
$conn = new mysqli($host,$username,$password,$database) or die($mysqli->error);



//check connection
if(!$conn) 
{
  die("connection failled".mysqli_connect_error());
}

$sname = $_POST['school_name'];
$code = $_POST['code'];
$student = $_POST['student'];
$amount = $_POST['amount'];


$sql= "INSERT INTO funds
(school_name,code, student ,amount)
VALUE ('$sname','$code','$student','$amount')";

if (mysqli_query($conn,$sql))
{
echo "Message sent succesfully";
header('location:main.php');
}
else
{
 echo"error!!!".$sql.mysqli_error($conn);
}

mysqli_close($conn);
?>