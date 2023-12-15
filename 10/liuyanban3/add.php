<?php 
    
    session_start();
    include 'conn.php';
    if(!empty($_POST['title'])&&!empty($_POST['content'])){
        $user = $_SESSION['session'];
        $title = $_POST['title'];
        $content = $_POSt['content'];
        $sql = "insert into liuyanban(username,title,content) values($user,$title,$content)";

        $res = mysqli_query($con,$sql);

        if($res){
            echo '<script>alert("留言成功");windows.history.back(-1);</script>';
        }
    }
    else{
        echo '<script>alert("empty");windows.history.back(-1);</script>';

    }

?>

<?php 

?>

