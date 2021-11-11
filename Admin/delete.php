
  <?php
  include('conn.php');
   if(isset($_GET['dhid']))
  {
    $id=$_GET['dhid'];
    $result=$mysqli->query("delete  from  headteacher  where email='$id'")or die($mysqli->error);
    header('location:users.php');
  }
    if(isset($_GET['dqid']))
  {
    $id=$_GET['dqid'];
    $result=$mysqli->query("delete  from  qrofficer  where email='$id'")or die($mysqli->error);
    header('location:users.php');
  } 
     if(isset($_GET['dmid']))
  {
    $id=$_GET['dmid'];
    $result=$mysqli->query("delete  from  ministryincharge  where email='$id'")or die($mysqli->error);
    header('location:users.php');
  } 
     if(isset($_GET['diid']))
  {
    $id=$_GET['diid'];
    $result=$mysqli->query("delete  from  internal_curriculumsupervisor  where email='$id'")or die($mysqli->error);
    header('location:users.php');
  } 
  {
    $id=$_GET['dfid'];
    $result=$mysqli->query("delete  from  finance  where email='$id'")or die($mysqli->error);
    header('location:users.php');
  } 
  ?>