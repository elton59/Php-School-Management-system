    <html>
<head>
<title>cosmos</title>

        <style>

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    background-color: rgb(245, 248, 245);
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 25px;
}

input[type=number] {
    width: 100%;
    padding: 12px 20px;
    background-color: rgb(245, 248, 245);
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 25px;
}

input[type=submit] {
    width: 100%;
    padding: 12px 20px;
    background-color: darkgreen;
    margin: 8px 0;
    font-size: 20px;
    box-sizing: border-box;
    border-radius: 25px;
}

    p {
    text-align: center;
    color: rgb(235, 238, 235);
    background: black;
    font-size: 27px;
    border-radius: 25px;
}

form.center
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
}
fieldset
{
    border-radius: 25px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5px;   
}

                </style>

</head>
<body>


<fieldset>
<form action="" method="POST" >
 <input type="number" name="id_number" placeholder="Enter ID To Search">
 <input type="submit" name="search" value="search data">
 </form>
 <?php

$conn= mysqli_connect('localhost','root','','odhil');

if(isset($_POST['search']))
{
    $id_number = $_POST['id_number'];

    $query = " SELECT * FROM messages WHERE id_number ='$id_number' ";
    $query_run = mysqli_query($conn , $query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>


        <form action="" method="POST">
        <input type="hidden" name="id_number" value="<?php echo $row['id_number'] ?>"/>
        
        <p>Text:</p>
        <input type="text" name="notice" value="<?php echo $row['notice'] ?>"/>
        <p>Date:</p>
        <input type="text" name="reg_date" value="<?php echo $row['reg_date'] ?>"/>


        <?php
    }
}

 ?>
 </fieldset>
</body>
</html>

<fieldset> 
        <p>Leave your feedback</p>
                    <form action= "feedbackaction.php" method= "post" id="myform" >   
                    <input type="number" name="id_number" placeholder="Enter Your Id Number Here">    
                        <input type="text" name="notice" placeholder="Write your feedback here">
                        <input type="submit" value="Send">
        </form>
    </fieldset>
</body>
</html>