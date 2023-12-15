<?php 
    $a = 'xx123yyyy456abc';
    if(empty($a)){
        echo '空';
    }
    else{
        echo '非空';

    }
    $y = substr($a,3,4);
    echo $y;
    echo '<br>';
    $arr = explode('123',$a);
    print_r($arr);
    echo "<br>";

    $x = " 123 ";
    echo $x;
    echo trim($x);
?>
