<?php

if(isset($_POST['submit'])) 
{
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf','docx');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0)
        {
            if($fileSize < 4000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;

                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: exams.php? upload succes");

            }
            else{
                echo "file too lrge";
            }

        }
        else{
            echo "Please upload a pdf file";
        }

    }
    else{
        echo "error";
    }
}


?>