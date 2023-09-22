<?php 
    $my_file = 'log.txt';
    $handle = fopen($my_file,'a');
    $data = 'this is test!';
    fwrite($handle,$data);
    fclose($handle);
    
?>