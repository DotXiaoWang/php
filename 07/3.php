<?php
        $con=mysqli_connect('localhost','root','root','test');

        $sql='insert   usernames(id,NAME,sex)  values(4,"zhilian","man")';
        if(mysqli_query($con,$sql)){
                echo 'insert sucessful!';
        }
        mysqli_close($con);
?>
