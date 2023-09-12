<?php
    session_start();
    if(!empty($_SESSION['admin'])){
        header('Location:index.php');
        exit();
    }
    if($_POST['username']=='admin'&&$_POST['password']=='admin'){
        $_SESSION['username']=$_POST['username'];
        echo "<script>alert('login success')</script>";
    }
?>