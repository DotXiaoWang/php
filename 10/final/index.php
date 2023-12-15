<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板</title>
</head>
<body>
    <form action="add.php" method="POST">
        <p>title</p>
        <input type="text" name="title">
        <p>content</p>
        <textarea name="content" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="submit">

    </form>

    <a href="logout.php"><button>退出</button></a>
</body>
</html>

<?php

    include 'conn.php';

    session_start();
    $sql = "select * from liuyan";
    $res = mysqli_query($con,$sql);
    if($res){
        echo '<p><br>'.'当前用户名为:'.$_SESSION['session'].'<br></p>';
        
        while($row = mysqli_fetch_row($res)){
            echo '<p>主题:'.$row[2].'······'.'内容:'.$row[3].'<br></p>';
        }
    }
    mysqli_close($con);

?>