<?php
    $filename = '1.txt';
    $string = 'this is test!!!';
    $handle=fopen($filename,'a') or die('cat open file'.$filename);
    if($handle){
        $x = fwrite($handle,$string);
        fclose($handle);
        echo "sucessfule";


    }else{
        echo 'faild';

    }




?>