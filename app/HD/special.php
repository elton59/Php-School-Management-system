
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" />
<script src="myscripts.js"></script>

<style>
    h1{
    width: 100%;
    padding: 12px 20px;
    background-color: darkgreen;
    margin: 8px 0;
    font-size:18;
    color: white;
    box-sizing: border-box;
    border-radius: 25px;
}
</style>

</head>
<body>

<div> 
        <p> Learning material requests for special education</p>

                        <form  class="center" action="specs.php" method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
			
                            <fieldset>
                          

<h1 for="schools">Select your school:</h1>

<select name="sname" id="schools">
  <option value="St. Francis Rangala Girls Secondary"> St. Francis Rangala Girls Secondary</option>
  <option value="Rangala Boys Secondary"> Rangala Boys Secondary</option>
  <option value="Simenya Secondary"> Simenya Secondary</option>
  <option value="Madungu Secondary Sch"> Madungu Secondary Sch</option>
  <option value="Sidindi Secondary"> Sidindi Secondary</option>
  <option value="St. Pauls Sigomre Secondary Sch"> St. Pauls Sigomre Secondary Sch</option>
  <option value="Gospel Mission Academy Secondary"> Gospel Mission Academy Secondary</option>
</select>

</fieldset>
<p></p>
                <fieldset>
                    <h1>Enter number of students </h1><br>
					<input type="number" name ="students"  value ="students"  autofocus required  > <br>
                    </fieldset>
<p></p>
                    <fieldset>
                    <h1>Enter number of Special students if any</h1><br>
					<input type="number" name ="special" value ="special"  autofocus required  > <br>
                    </fieldset>
                    <p></p>
                     
                    <fieldset>
                    <h1>Enter number of Special Exercise books requesting for special pupils if any</h1><br>
					<input type="number" name ="books"  value ="books"  autofocus required  > <br>
                    </fieldset>
                    <p></p>

                    <fieldset>
                    <h1>Any other request from ministry of education</h1><br>
					<input type="text" name ="AOB"    autofocus required  > <br>
                    </fieldset>
                    <p></p>
					 
                <input type="submit" value="Send" class="btn btn-primary pull-left" >

                                  </fieldset>
                                </fieldset>
                              </form>
                              </div>
</body>
</html>

