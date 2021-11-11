
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

            if(isset($_POST['sendm']))
            {
                if(isset($_POST['sfrom']))
                {
                    $sfrom=$_POST['sfrom'];
                }
                  if(isset($_POST['role']))
                {
                    $role=$_POST['role'];
                }
                  if(isset($_POST['res']))
                {
                    $res=$_POST['res'];
                }
                  if(isset($_POST['msg']))
                {
                    $msg=$_POST['msg'];
                }
                
                $result=$mysqli->query("INSERT INTO feedback (email,sentfrom,sentto,message) values ('$sfrom','$role','$res','$msg')") or die($mysqli->error);
                If($result)
                {
                    echo "<h1> Message sent succesfully";
                
                }
                else
                {
                   echo "<h1> failed";
              
                }
                
                
            }
            ?>