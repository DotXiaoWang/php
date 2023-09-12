<?php
    $my_file = 'log.txt';
    $handle = fopen($my_file,'a');
    $data = 'This is the data';
    fwrite($handle,$data);
    fclsoe($handle);
    
?>