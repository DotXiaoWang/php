<?php
    $file = fopen("test.txt",'w');
    fwrite($file,"Hello World Testing!");
    fclose($file);


?>