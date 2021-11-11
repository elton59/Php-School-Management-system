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
$feedback =$_POST['feedback'];

$sql="INSERT INTO feedback
(id_number,feedback ) VALUES ('$id_number','$feedback')";
if (mysqli_query($conn,$sql))
{
echo "Message sent <a href= 'index.php'>HOME </a>";
}
else
{
 echo"error!!!".$sql.mysqli_error($conn);
}

mysqli_close($conn);
?>

