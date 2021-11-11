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

if(!$conn)
{
    die("connection failled".mysqli_connect_error());
}

$exercise = $_POST['exercise'];
$text = $_POST['text'];
$pens = $_POST['pens'];
$pencil = $_POST['pencil'];
$calculators = $_POST['calculators'];
$exercise_s = $_POST['exercise_s'];
$text_s = $_POST['text_s'];
$pens_s = $_POST['pens_s'];
$calculators_s = $_POST['calculators_s'];

$sql="INSERT INTO resources
(exercise,textu,pens,pencil,calculators,exercise_s,text_s,pens_s,calculators_s) 
VALUE ('$exercise','$text','$pens','$pencil','$calculators','$exercise_s','$text_s','$pens_s','$calculators_s')";

if (mysqli_query($conn,$sql))
{
    echo "message sent succesfully ";
}
else
{
    echo "error!!!".$sql.mysqli_error($conn);
}
mysqli_close($conn);

?>