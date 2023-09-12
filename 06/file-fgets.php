<?php 
    $$file = 'log.txt';
    $handle = fopen($file,'r');
    if($handle){
        while(feof($handle)){
            $line = fgets($handle);
            echo $file;
            echo '<br>';
        }
    }
    fclose($handle);

?>