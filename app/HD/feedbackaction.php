<?php
//check connection
$conn= mysqli_connect('localhost','root','','odhil');

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

