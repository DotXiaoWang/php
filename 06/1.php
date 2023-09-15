<?php 
    $filename = '1.txt';
    $handle1 = fopen($filename,'r');
    echo $handle1.'<br>';
    //$data = fread($handle1,8);
    $data = fread($handle1,filesize($filename));

    echo $data;
    fclose($filename);



?>