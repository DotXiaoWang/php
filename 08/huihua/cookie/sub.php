<?php 
        // if(empty($_POST['user'])|| empty($_POST['pass'])){
        //     echo '<script>alert("empty");window.history.back(-1)</script>';
        // }


        if(isset($_POST['submit'])){
            if($_POST['user']=='admin'&&$_POST['pass']=='admin'){
                setcookie('cookiename',$_POST['user'],time()+3600);
                header('Location:index.php');

            }
     
        }
        else{
            echo '<script>alert("empty");window.history.back(-1)</script>';

        }
?>