<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '123';
    $db = 'test';
    $con = mysqli_connect($server,$username,$password,$db);
    if(!$con){
        echo 'connect false';
        exit(0);
    }    
?>