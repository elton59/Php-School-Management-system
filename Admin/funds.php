><html>
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
    

<p>FUNDS TO BE ALLOCATED TO SCHOOLS</p>
        <fieldset>
<ul style="list-style-type:disc;">

  <li>Criteria of fund distribution .</li>
  <li>funds transfer mechanism .</li>
  <li>The consideration of use and the size of Funds </li>
  </ul>
  
  <form method="post" action="pesa.php">
  <p> Schools Funds Allocations 2020/2021</p>
  <table>
          <tr>
              <th>Schools Name</th>
              <th>School code </th>
              <th>Number of students</th>
              <th>Amount to be allocated </th>
              

        
</fieldset>
</tr>
<tr>
<td>
<select name="school_name" id="schools">
  <option value="Dendyo primary school"> Dendyo primary school</option>
  <option value="Rangala Boys primary school"> Rang'ala Boys primary school</option>
  <option value="Ambira primary school"> Ambira primary school</option>
  <option value="Nyasanda primary school"> Nyasanda primary school</option>
  <option value="Sidindi primary school"> Sidindi primary school</option>
  <option value="Ngunya primary school"> Ngunya primary school</option>
  <option value="Ugunja primary school"> Ugunja primary school</option>
   <option value="St. Francis Rangala Girls Secondary"> St. Francis Rang'ala Girls Secondary</option>
  <option value="Rangala Boys Secondary"> Rang'ala Boys Secondary</option>
  <option value="Simenya Secondary"> Simenya Secondary</option>
  <option value="Madungu Secondary Sch"> Madungu Secondary Sch</option>
  <option value="Sidindi Secondary"> Sidindi Secondary</option>
  <option value="St. Pauls Sigomre Secondary Sch"> St. Paul's Sigomre Secondary Sch</option>
  <option value="Gospel Mission Academy Secondary"> Gospel Mission Academy Secondary</option>
</select></td>
<td><input type="number" name="code" ></td>
    <td><input type="number" name="student" ></td>
    <td><input type="number" name="amount" ></td>
    
</tr>

      </table>


      <input type="submit" value="send">
</form>

  </fieldset>
</fieldset>
</body>
</html>
