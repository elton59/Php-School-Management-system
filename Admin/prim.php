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
input[type=file] {
    width: 100%;
    padding: 1px 2px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 6px;
}

                </style>

</head>
<body>
    

<p>Uploaded Examination will be found here</p>
        <fieldset>
<ul style="list-style-type:disc;">

  <li>Read the Instructions Carefully and fill the application form.</li>
  <li>We encourage you to use this service whenever possible </li>
  <li>Examination results will be arranged by index 0 1 2 3 for form 1 two three and four respectively</li>
  
  </ul>

 
  
  <p>Select Each form examination to upload:</p>
  

  <form action="fetch.php" method="post" enctype="multipart/form-data">
  
  

<h1> Enter the school number(id) to search </h1>
  <input type="number" value="id_number" name="">

    <input type ="submit" value="search">  
</form>

  </fieldset>
</fieldset>
</body>
</html>
