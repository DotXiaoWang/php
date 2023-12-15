<?php 
    session_start();
    if($_SESSION['xxxx']=='ptz'){
        echo  "welcome , you session is :{$_SESSION['xxxx']}";
        unset($_SESSION['xxxx']);


    }else{
        header('Location:index.php');

    }
?>