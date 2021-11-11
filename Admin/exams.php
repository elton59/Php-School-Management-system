
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


                </style>

</head>
<body>
    


<p>Ministry of Education calendar of examminations for 2020</p>
        <fieldset>

  <p>School Examinations & Programs</p>
  <ul style="list-style-type:disc;">
  <li>Primary schools Examinations ( featuring: Mathematics, English, Kiswahili, Science, Social study, Religion </li>
  <li>Secondary schools Examinations (Featuring:  Mathematics , Emglish, Kiswahili, Religion,Biology, Physics, Chemistry</li>
  
  </ul>
  
  <p>Term One Exammination dates</p>
  
  <form method="post" action="fund.php">
      <table>
          <tr>
              <th>Primary schools  </th>
              <th>Secondary Schools </th>

</tr>
<tr>
    <td><input type="date" name="primary_1" autofocus required></td>
    <td><input type="date" name="secondary_1" autofocus required></td>
</tr>
</table>

<p>Term Two Exammination dates</p>
<table>
<tr>
              <th>Primary schools  </th>
              <th>Secondary Schools </th>

</tr>
<tr>
    <td><input type="date" name="primary_2" autofocus required></td>
    <td><input type="date" name="secondary_2" autofocus required></td>
</tr>
      </table>

      <p>Term Three Exammination dates</p>
<table>
<tr>
              <th>Primary schools  </th>
              <th>Secondary Schools </th>
</tr>
<tr>
    <td><input type="date" name="primary_3" autofocus required></td>
    <td><input type="date" name="secondary_3" autofocus required></td>
</tr>
      </table>
      <input type="submit" value="send">
</form>

  </fieldset>
</fieldset>
</body>
</html>
