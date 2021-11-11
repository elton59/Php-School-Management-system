<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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
    


<p>Ministry of education calendar of events for 2019 Games and Co-curricular activities</p>
        <fieldset>
<ul style="list-style-type:disc;">

  <li>Secondary & Primary Schools’ 2019 Games and Co-Curricular calendar</li>
  <li>Kenya Music Festival, National Level 2019.</li>
  <li>Kenya National Drama Festival National Workshop .</li>
  <li>Kenya Science and Engineering Fair Competitions </li>
  </ul>


  <p>School Events & Programs</p>
  <ul style="list-style-type:disc;">
  <li>Term One Games ( featuring: Basketball, Hockey, Rugby 15’s, Rugby 7’s, Swimming, Handball and Athletics </li>
  <li>Term two Games (Featuring: Rugby 7’s, Netball, Football U16 & U19, Volleyball and Racquet games</li>
  <li>Kenya Music Festival Writers’ Workshop 2019</li>
  
  </ul>
   <form method="post" action="sche.php">
  <label>Select Level</label>
   <td>
  <select name="level" id="">
  <option value="primaryschoolgames">Primary School games</option>
  <option value="secondaryschoolgames">Secondary School games</option>  
</select>
</td>

  <p>Term one Games schedule</p>

  
 
      <table>
          <tr>
              <th>Term one Games day 1</th>
              <th>Term one Games day 2</th>
              <th>Venue </th>
           

</tr>
<tr>
    <td><input type="date" name="date_1"  min="<?php echo date('Y-m-d'); ?>"autofocus required></td>
    <td><input type="date" name="date_2"  min="<?php echo date('Y-m-d'); ?>"autofocus required></td>
    <td><input type="text" name="venue_1" min="<?php echo date('Y-m-d'); ?>"autofocus required></td>
        
</td>

</tr>
</table>
<p>Term two Games schedule</p>
<table>
          <tr>
              <th>Term two Games day 1</th>
              <th>Term two Games day 2</th>
              <th>Venue </th>
            
                  

</tr>
<tr>
    <td><input type="date" name="date_2_1" min="<?php echo date('Y-m-d'); ?>" autofocus required> </td>
    <td><input type="date" name="date_2_2" min="<?php echo date('Y-m-d'); ?>" autofocus required></td>
    <td><input type="text" name="venue_2 "  min="<?php echo date('Y-m-d'); ?>"autofocus required></td>
   
</select>
</td>

</tr>
</table>
<p>Term three Games schedule</p>
<table>
          <tr>
              <th>Term three Games day 1</th>
              <th>Term three Games day 2</th>
              <th>Venue </th>
            


</tr>
<tr>
    <td class="datepicker"><input type="date" name="date_3_1"  min="<?php echo date('Y-m-d'); ?>" autofocus required> </td>
    <td><input type="date" name="date_3_2" min="<?php echo date('Y-m-d'); ?>" autofocus required> </td>
    <td><input type="text" name="venue_3"  min="<?php echo date('Y-m-d'); ?>"autofocus required></td>
  
</tr>
</table>
      <input type="submit" value="send">
</form>

  </fieldset>
</fieldset>
</body>
   

</html>
