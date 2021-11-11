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

//create table
$id_number =$_POST['id_number'];
$notice =$_POST['notice'];

$sql="INSERT INTO messages
(id_number,notice ) VALUES ('$id_number','$notice')";
if (mysqli_query($conn,$sql))
{
echo "Message sent <a href= 'indexs.php'>HOME </a>";
}
else
{
 echo"error!!!".$sql.mysqli_error($conn);
}

mysqli_close($conn);
?>

