<?php



//check connection

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


$code = $_POST['code'];
$student = $_POST['student'];
$amount = $_POST['amount'];
$code_2 = $_POST['code_2'];
$student_2 = $_POST['student_2'];
$amount2 = $_POST['amount2'];

$sql= "INSERT INTO funds
(code, student ,amount, code_2,student_2,amount2)
VALUE ('$code','$student','$amount','$code_2','$student_2','$amount2')";

if (mysqli_query($conn,$sql))
{
echo "Message sent succesfully";
}
else
{
 echo"error!!!".$sql.mysqli_error($conn);
}

mysqli_close($conn);
?>