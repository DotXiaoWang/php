<?php 
    $file = '1.txt';
    $hand = fopen($file,'r');
    echo fgets($hand);
    echo '<br>';
    echo fgets($hand);
    fclose($file);
    
?>