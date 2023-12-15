<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登陆界面</title>
</head>
<body>
    <form action="" method="post">
    <p>username:</p>
    <input type="text" name="user">
    <p>password:</p>
    <input type="password" name="pass"><br>
    <p><input type="submit" value="login" name="login"></p>
    

    </form>
    <p><a href="reg.php">register</a></p>
</body>
</html>

<?php
    include 'conn.php';
    session_start();
    if(!empty($_POST['login'])){
        if(empty($_POST['user']) || empty($_POST['pass'])){
            echo '<script> alert("请输入完整信息");</script>';
        }else{
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $sql = "select * from users where username = '$user' and password = '$pass'";
            // $res = mysqli_fetch_array($res);
            $query = mysqli_query($con, $sql);
            $res = mysqli_fetch_array($query);
            if(!$res){
                echo '<script> alert("登录失败");</script>';
            }else{
                $_SESSION['session'] = $_POST['user'];
                header('Location:index.php');
                exit();
            }

        }
    }


?>