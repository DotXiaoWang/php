<?php 

    $con = mysqli_connect('localhost','root','root');
    if(!$con){
        echo 'Cloud not connect';
    }else{
        echo "it done well";

    }
    mysqli_close($con);
?>