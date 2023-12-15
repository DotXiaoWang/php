<?php 
    if($_COOKIE['user']=='ptz'){
        echo "welcome {$_COOkie['user']}";


    }else{
        header('Location:login.php');
    }


?>