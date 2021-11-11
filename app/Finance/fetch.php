<?php

$dir= "../hd/test/uploads/" ;

if($opendir = opendir ($dir))
{
            while(($file = readdir($opendir)) !== FALSE)
            {
                echo $file."<br>";
            }
        }

?>