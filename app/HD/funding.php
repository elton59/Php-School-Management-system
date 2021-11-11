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
    

<p>FUNDING REQUEST ORDERS</p>
        <fieldset>
<ul style="list-style-type:disc;">

  <li>Read the Instructions Carefully and fill the application form.</li>
  <li>Criteria of funds distribution .</li>
  <li>Grant transfer mechanism .</li>
  <li>The consideration of use and the size of grants </li>
  </ul>

  <ul style="list-style-type:disc;">
  <li>Student Resource Package </li>
  <li>Computerised Administrative System Environment in
 Schools is the software package provided to Victorian
 government schools to support school administration, finance
 and central reporting</li>
  </ul>
  
  <p>Read and carefully fill the bellow table for funding request</p>
  
  <form method="post" action="fundding.php">
<h1 for="schools">Select school name:</h1>
<select name="sname" id="schools">
  <option value="St.Francis Rangala Girls Secondary"> St. Francis Rang'ala Girls Secondary</option>
  <option value="Rangala Boys Secondary"> Rang'ala Boys Secondary</option>
  <option value="Simenya Secondary"> Simenya Secondary</option>
  <option value="Madungu Secondary Sch"> Madungu Secondary Sch</option>
  <option value="Sidindi Secondary"> Sidindi Secondary</option>
  <option value="St. Pauls Sigomre Secondary Sch"> St. Paul's Sigomre Secondary Sch</option>
  <option value="Gospel Mission Academy Secondary"> Gospel Mission Academy Secondary</option>
  <option value="Ugunja primary school"> Ugunja primary school</option>
  <option value="Nyasanda primary school"> Nyasanda primary school</option>
</select>

      <table>
          <tr>
              <th>Project name </th>
              <th>Amount </th>
              <th>Project description </th>

</tr>
<tr>
    <td><input type="text" name="project_name" ></td>
    <td><input type="number" name="amount" ></td>
    <td><input type="text" name="description" ></td>
</tr>
<tr>    
<td><input type="text" name="project_name1" ></td>
    <td><input type="number" name="amount1" ></td>
    <td><input type="text" name="description1" ></td>
</tr>
<tr>
<td><input type="text" name="project_name2" ></td>
    <td><input type="number" name="amount2" ></td>
    <td><input type="text" name="description2" ></td>
</tr>
<tr>
      </table>
      <input type="submit" value="send">
</form>

  </fieldset>
</fieldset>
</body>
</html>
