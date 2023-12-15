<?php 
    $filename = '1.txt';
    $filename2 = '11.txt';
    $x = copy($filename,$filename2);
    if($x){
        echo '成功';
    }else{
        echo '失败';    
    }
  unlink($filename2);
?>