<?php
    if(empty($_POST['$title'])||empty($_POST['$content'])){
        echo '<script>alert("empty");window.history.back(-1)</script>';
        
    }else{
        $title = $_POST['title'];
        $title = $_POST['content'];
        $con = mysqli_connect('localhost','root','root','test');
        $sql = "insert into liuyanban1()values('$title','$content')";
        $res = mysqli_connect($con,$sql);
        if($res){
        echo '<script>alert("insert sucessful");window.history.back(-1)</script>';
 
        }
        mysqli_close($con);
        
    }
?>