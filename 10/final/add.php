<?php
    include 'conn.php';
    include 'login';
    session_start();
    if(!empty($_POST['title']) && !empty($_POST['content'])){
        $user = $_SESSION['session'];
        // $user = $_POST['user'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "insert into liuyan(username,title,content) value($user,$title,$content)";
        // $sql = "insert into liuyan(username,title,content) value($user,$title,$content)";

        $res = mysqli_query($con,$sql);
        if($res){
            echo '<script> alert("留言成功");window.history.back(-1);</script>';
        }else{
            echo '<script> alert("留言失败");window.history.back(-1);</script>';
        }
    }else{
        echo '<script> alert("留言是空的");window.history.back(-1);</script>';
    }



?>