<?php 
    $con  = mysqli_connect('localhost','root','root');
    if(mysqli_select_db($con,'test')){
        //echo 'select databses sucessful!';
        echo '连接成功';
    }
    mysqli_close($con);
?>