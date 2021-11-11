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
$conn= new mysqli($host,$username,$password,$database) or die($mysqli->error);



if(!$conn)
{
    die("connection failled".mysqli_connect_error());
}

$date_1 = $_POST['date_1'];
$date_2 = $_POST['date_2'];
$venue_1 = $_POST['venue_1'];

$date_2_1 = $_POST['date_2_1'];
$date_2_2 = $_POST['date_2_2'];
$venue_2 = $_POST['venue_1'];

$date_3_1 = $_POST['date_3_1'];
$date_3_2 = $_POST['date_3_2'];
$venue_3 = $_POST['venue_3'];
$level=$_POST['level'];

$sql= "INSERT INTO schedule
(date_1,date_2,venue_1,date_2_1,date_2_2,venue_2,date_3_1,date_3_2,venue_3,level)
 VALUE ('$date_1','$date_2','$venue_1','$date_2_1','$date_2_2','$venue_2','$date_3_1','$date_3_2','$venue_3','$level')";


if (mysqli_query($conn,$sql))
{
    echo "message sent succesfully";
    header('location:main.php');
}
else{
    echo "error!!!".$sql.mysqli_error($conn);
}
mysqli_close($conn);
?>