<?php 
    session_start();
    //$_SESSION['user']='zhilian';
    $_SESSION['user']= array();
    //session_destroy();
    echo $_SESSION['user'];
   // unset($_SESSION['user']);

?>

