<?php
$conn=mysqli_connect('localhost','root','','odhil');

if(!$conn)
{
    die("connection failled".mysqli_connect_error());
}

If(isset($_POST['submit']))
{
if(isset($_POST['Id']))
{
$schid= $_POST['Id'];
}
if(isset($_POST['file']))
{
$file= $_POST['file'];
}
$sql="INSERT INTO uploads(Id,file) VALUES('$schid','$file')";

if (mysqli_query($conn,$sql))
{
    echo "message sent succesfully ";
}
else
{
    echo "error!!!".$sql.mysqli_error($conn);
}
mysqli_close($conn);
}

?>