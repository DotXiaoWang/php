<?php 
    function test($m,$n=3){
        $m+=5;
        echo $m+$n;
        echo '<br>';
        echo '函数内部$m='.$m;

    }

    $m = 1;
    test($m);
    echo '<br>';
    echo '函数外部$m='.$m;
    echo '<br>=========<br>';
    test(4,5);
    

?>