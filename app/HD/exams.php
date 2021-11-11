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
    

<p>Uploading your Examination </p>
        <fieldset>
<ul style="list-style-type:disc;">

  <li>Read the Instructions Carefully and fill the application form.</li>
  <li>We encourage you to use this service whenever possible as your documents will arrive quickly, easily and safely..</li>
  
  </ul>

  <ul style="list-style-type:disc;">
  <li>Student Resource Package </li>
  <li>Any documents that you scan for uploading must be from original documents</li>
  <li> If the document has any elements that are in colour - stamps, text, signatures etc. - then scan it in colour. </li>
  <li>Be sure that everything in the document is visible on the scan,s</li>
  </ul>
  <h1>Primary School Upload</h1>
  <p>Select  form examination to upload:</p>
 

  <form  method="POST" enctype="multipart/form-data" action="upload.php">
  
  
 
 

      <table>
            
<tr>
    <td> <input type="file" name="fileToUpload" id="fileToUpload"  accept="image"></td>


</tr>

      </table>
      <input type="submit" value="Upload Image" name="submit">
</form> <h1>Secondary School Upload</h1>
  <p>Select  form examination to upload:</p>
 

  <form  method="POST" enctype="multipart/form-data" action="supload.php">
  
  
 
  

      <table>
            
<tr>
    <td> <input type="file" name="fileToUpload" id="fileToUpload" " ></td>


</tr>

      </table>
      <input type="submit" value="Upload Image" name="submit">
</form>

  </fieldset>
</fieldset>
</body>
</html>
