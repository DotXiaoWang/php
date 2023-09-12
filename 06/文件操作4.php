<?php
    $filename = '2.txt';
    $data = 'zhi lian edu ';

    if(file_put_contents($filename,$data)){
        echo 'sucessful!';
    }else{
        echo 'failed!';
    }
?>
