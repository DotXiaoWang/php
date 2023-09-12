<?php
    $filename = '1.txt';
    $string  = 'thsi is test!!';
    $handle = fopen($filename,'a')or die('cat open file:'.$filename);
    if($handle){
        $x = fwrite($handle,$strinig);
        fclsoe($handle);
        echo 'sucessful!';
        
    }else{
        echo 'failed!';    
    }

?>