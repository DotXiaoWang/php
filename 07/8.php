<?php

    $filename = '2.txt';
    $data = 'zhi lian edu';
    //返回值也是写入的字符串字节数
    //x = file_put_contents($filename,$data);
    //echo $x;
    if(file_put_contents($filename,$data,FILE_APPEND)){ // FILE_APPEND表示追加   
        echo 'sucessful';
    }else{
        echo 'failed!';
    }
    //写入完毕后直接读取
    echo file_get_contents($filename);



?>