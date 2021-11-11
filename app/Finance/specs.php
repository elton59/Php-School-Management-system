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

$id_number = $_POST['id_number'];
$students = $_POST['students'];
$special = $_POST['special'];
$books = $_POST['books'];
$AOB = $_POST['AOB'];


$sql= "INSERT INTO request
(id_number,students, special ,books,AOB)
VALUE ('$id_number','$students','$special','$books','$AOB')";

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