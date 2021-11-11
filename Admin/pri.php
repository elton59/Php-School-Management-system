<?php

$dir= "../hd/test/uplo/" ;

if($opendir = opendir ($dir))
{
            while(($file = readdir($opendir)) !== FALSE)
            {
                echo $file."<br>";
            }
        }

?>