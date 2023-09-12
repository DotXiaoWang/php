<?php

    $filename ='1.txt';
    $filename2 = '11.txt';
    copy($filename,$filename2);//讲1.txt复制一份  命名为11.txt
    unlink($filename2);//删除11.txt

?>