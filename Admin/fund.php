
<?php


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


$primary_1 = $_POST['primary_1'];
$secondary_1 = $_POST['secondary_1'];
$primary_2 = $_POST['primary_2'];
$secondary_2 = $_POST['secondary_2'];
$primary_3 = $_POST['primary_3'];
$secondary_3 = $_POST['secondary_3'];

$sql= "INSERT INTO exams
(primary_1, secondary_1 ,primary_2, secondary_2, primary_3, secondary_3)
VALUE ('$primary_1','$secondary_1','$primary_2','$secondary_2','$primary_3','$secondary_3')";

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