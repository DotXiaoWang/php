<?php 
    $file = '1.txt';
    $handle = fopen($file,'r');
    
    if($handle){
        while(!feof($handle)){
            $line = fgets($handle);
            echo $line.'<br>';

        }
        fclose($file);

    }else{
        echo "$file open failed";
    }
?>