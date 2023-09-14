<?php 
    $x = 5;
    $y=10;
    function test(){
        global $x,$y;
        $y+=$x;

    }
    test();
    echo $y;
?>

