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

$sname = $_POST['sname'];
$project_name = $_POST['project_name'];
$amount = $_POST['amount'];
$description = $_POST['description'];

$project_name1 = $_POST['project_name1'];
$amount1 = $_POST['amount1'];
$description1 = $_POST['description1'];

$project_name2 = $_POST['project_name2'];
$amount2 = $_POST['amount2'];
$description2 = $_POST['description2'];
$sql= "INSERT INTO
 fundding(school_name,project_name,amount,description,project_name1,amount1,description1,project_name2,amount2,description2)
 VALUES('$sname','$project_name','$amount','$description','$project_name1','$amount1','$description1','$project_name2','$amount2','$description2')";

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