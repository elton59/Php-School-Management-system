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



//check connection
if(!$conn) 
{
  die("connection failled".mysqli_connect_error());
}

if(isset($_POST['sname']))
{
$sname = $_POST['sname'];
}
if(isset($_POST['students']))
{
$students = $_POST['students'];
}
if(isset($_POST['special']))
{
$special = $_POST['special'];
}
if(isset($_POST['books']))
{
}
$books=$_POST['books'];
if(isset($_POST['AOB']))
{
$AOB = $_POST['AOB'];
}

$sql= "INSERT INTO request
(school_name,students, special ,books,AOB)
VALUE ('$sname','$students','$special','$books','$AOB')";

if (mysqli_query($conn,$sql))
{
echo "Message sent succesfully";
header('location:staff.php');
}
else
{
 echo"error!!!".$sql.mysqli_error($conn);
}

mysqli_close($conn);


?>