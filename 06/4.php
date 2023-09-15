<?php 

    $filename = '1.txt';
    $string  = "this is test!!!";
    $handle = fopen($filename,'a');

    $x = fwrite($handle,$string);
    if($x){
        echo '成功';
    }
    else{
        echo '失败';
    }
    fclose($handle);
    system('whoami');

    echo file_get_contents('1.txt');
    
?>