<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言吧页面</title>
</head>
<body>
    <form action="add.php" method="POST">
        <P>title</P>
        <input type="text" name="title">
        <p>content</p>
        <textarea name="content" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="提交" name="submit">

    </form>
    <a href="logout.php"><button>退出</button></a>
</body>
</html>
<?php 
    session_start();
    include 'conn.php';
    $sql = "select * from liuyanban";
    $res = mysqli_query($con,$sql);
    if($res){
        echo '当登录用户为:'.$_SESSION['session'].'<br>';
        while($rows = mysqli_fetch_array($res)){
            echo '主题：'.$rows[1].' '.'内容'.$rows[2].'<br>';
        }
    }
    mysqli_close($con);
?>
