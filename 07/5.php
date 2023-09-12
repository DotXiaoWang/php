<?php
    $file = '1.txt';
    $handle = fopen($file,'r');
    echo $handle;
    //feof指针到末尾了  true   没有则返回false
    if($handle){
        while(!feof($handle)){
            $line = fgets($handle);
            echo $line.'<br>';
        }
        fclsoe($file);

    }else{
         echo "$file open failed";   
    }
?>