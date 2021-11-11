<html>
<head>

<link href="css/table.css" rel="stylesheet" />
        <style>

fieldset
{
    border-radius: 18px;
}

                           
li {
  color: white;
  margin top:1px;
  text-align: left;
  padding: 16px;
  text-decoration: none;
}

select{
    background-color: rgb(37, 49, 58);
    color: white;padding: 16px;
    margin-left: 0%;
    width: 100%;
}
select:hover, .dropbtn:focus {
    background-color: rgb(13, 71, 25);
  }


                </style>

</head>
<body>
    

<p>LEARNING MATERIAL ALLOCATION</p>
        <fieldset>
<ul style="list-style-type:disc;">

  <li>Criteria of Resources distribution .</li>
  <li>Resources transfer mechanism .</li>
  <li>The consideration of use and the size of Resources </li>
  </ul>
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
$conn = new mysqli($host,$username,$password,$database) or die($mysqli->error);


if(!$conn)
{
    die("connection failled".mysqli_connect_error());
}
if(isset($_POST['allocate']))
{
$exercise = $_POST['exercise'];
$text = $_POST['text'];
$pens = $_POST['pens'];
$pencil = $_POST['pencil'];
$calculators = $_POST['calculators'];
$level = $_POST['level'];
$sql="INSERT INTO resources
(exercise,textu,pens,pencil,calculators,level) 
VALUE ('$exercise','$text','$pens','$pencil','$calculators','$level')";

if (mysqli_query($conn,$sql))
{
    echo "message sent succesfully ";
    header('location:main.php');
}
else
{
    echo "error!!!".$sql.mysqli_error($conn);
}
mysqli_close($conn);
}
?>
  <form method="post" >
  <p> Allocations for  schools </p>
  <Label>Select Level</Label>
  <select name="level">
    <option value='primary'>Primary</option>
    <option value='secondary'>Secondary</option>
  </select>
      <table>
          <tr>
              <th>Exercixe books </th>
              <th>Text books </th>
              <th>Pens </th>
              <th>Pencils writing </th>
              <th>Talking Calculators(special) </th>   
</fieldset>
</tr>
<tr>
    <td><input type="number" name="exercise" autofocus required></td>
    <td><input type="number" name="text" autofocus required></td>
    <td><input type="number" name="pens" autofocus required></td>
    <td><input type="number" name="pencil" autofocus required></td>
    <td><input type="number" name="calculators" autofocus required></td>
</tr>
      </table>
      <input type="submit" value="send" name="allocate">
</form>

  </fieldset>
</fieldset>
</body>
</html>
