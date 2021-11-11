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
img {
    border: 1px solid #ddd;
    border-radius: 15px;
    padding: 5px;
    width: 100%;
    margin-left: 10%;
  }

                </style>

</head>
<body>
    


<p>Ministry of education calendar of events for 2019 Games and Co-curricular activities</p>
        <fieldset>
<ul style="list-style-type:disc;">

  <li>Secondary & Primary Schools’ 2019 Games and Co-Curricular calendar</li>
  <li>Kenya Music Festival, National Level 2019.</li>
  <li>Kenya National Drama Festival National Workshop .</li>
  <li>Kenya Science and Engineering Fair Competitions 2019 </li>
  </ul>

  <img src="p.jpg" alt="games events">

  <p>School Events & Programs</p>
  <ul style="list-style-type:disc;">
  <li>Term One Games ( featuring: Basketball, Hockey, Rugby 15’s, Rugby 7’s, Swimming, Handball and Athletics </li>
  <li>Term two Games (Featuring: Rugby 7’s, Netball, Football U16 & U19, Volleyball and Racquet games</li>
  <li>Kenya Music Festival Writers’ Workshop 2019</li>
  
  </ul>
  
  <p>Read and carefully fill the table below</p>
  
  <form method="post" action="fund.php">
<h1> Enter your school number(id) </h1>
  <input type="number" value="id_number" name="">
      <table>
          <tr>
              <th>Date </th>
              <th>Activity </th>
              <th>Venue </th>

</tr>
<tr>
    <td><input type="date" name="date" ></td>
    <td><input type="text" name="activity" ></td>
    <td><input type="text" name="venue" ></td>
</tr>
<tr>    
    <td><input type="date" name="date2" ></td>
    <td><input type="text" name="activity2" ></td>
    <td><input type="text" name="venue2" ></td>
</tr>

      </table>
      <input type="submit" value="send">
</form>

  </fieldset>
</fieldset>
</body>
</html>
