<?php 
    $cars = array('a','b','c','d');
    echo count($cars);
    echo sizeof($cars).'<br>';

    $i = 0;
    for($i;i<count($cars);$i++){
        echo $cars[$i].'<br>';
    }
    
?>