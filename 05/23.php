<?php 
    class Test{
        function bigger($num1,$num2){
            if($num1>$num2){
                return 'bigger is '.$num1;

            }else if($num1<$num2){
                return 'bigger is '.$num2;

            }
            else{
                return '相等';
            }

        }

        function exchange($num1,$num2){
            echo '输入的num1='.$num1.'****'.'输入的num2='.$num2;
            $x = $num2;
            $num2=$num1;
            $num1 = $x;
            echo '<br>';
            echo '交换后的num1='.$num1.'****'.'交换后的num2='.$num2;

        }
        


    }

    $hhh = new Test;
    echo $hhh->bigger(120,120);
    echo '<br>';

    $kkk = new Test;

    echo $kkk->exchange(11,22);








?>