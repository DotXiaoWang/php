<?php
    include   'conn.php';
    session_start();
    if(!empty($_POST['title'])&& !empty($_POST['content'])){

        $user = $_SESSION['session'];//获取session全局数组中提前定义的好的值  名称要和login中定义的名称一致
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "insert into liuyanban(username,title,content) values('$user','$title','$content')";

        $res = mysqli_query($con,$sql);
        if($res){
            echo '<script>alert("留言板成功");window.history.back(-1);</script>';

        }else{
            echo "<script> alert("kong");window.history.back(-1);</script>";

        }
        


    }

?>