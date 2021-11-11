<?php
//host name
$host = "localhost";
//user name
$username = "id16401478_root";
//database password
$password = "&flC)*gbE4OF2b8-";
//database name
$database ="id16401478_odhil";
$mysqli = new mysqli($host,$username,$password,$database) or die($mysqli->error);

if(isset($_POST['supdate']))
{
if(isset($_POST['id']))
            {
              $id=$_POST['id'];
            }
            if(isset($_POST['d1']))
            {
              $d1=$_POST['d1'];
            }
            if(isset($_POST['d2']))
            {
              $d2=$_POST['d2'];
            }
            if(isset($_POST['v1']))
            {
              $v1=$_POST['v1'];
            }
            if(isset($_POST['d21']))
            {
              $d21=$_POST['d21'];
            }
             if(isset($_POST['d22']))
            {
              $d22=$_POST['d22'];
            }
             if(isset($_POST['v2']))
            {
              $v2=$_POST['v2'];
            }
             if(isset($_POST['d31']))
            {
              $d31=$_POST['d31'];
            }
            if(isset($_POST['d32']))
            {
              $d32=$_POST['d32'];
            }
            if(isset($_POST['d31']))
            {
              $v3=$_POST['v3'];
            }
            $result=$mysqli->query("update schedule set date_1='$d1',date_2='$d2',venue_1='$v1',date_2_1='$d21',date_2_2='$d22',venue_2='$v2',date_3_1='$d31',date_3_2='$d32',venue_3='$v3' where id='$id'") or die($mysqli->error);
            if($result==1)
            {
            echo " <center>Success</center";
            header('location:sport.php');
            }
            else
            {
                 
            echo " <center>failed</center";
            
            
            }
}
?>