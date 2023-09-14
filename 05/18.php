<?php 
    function test(){
        echo "hello world!".'<br>';

    }
    test();

    function x($sum){
        return "$sum * $sum=".$sum * $sum;

    }
    echo x(20);
    echo '<br>';
    
    function test2($a,$b){
        echo $a+$b;
    }
    test2(10,20)

?>