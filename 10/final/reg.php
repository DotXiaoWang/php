<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册界面</title>
</head>
<body>
    <form action="" method="post">
        <p>username:</p>
        <input type="text" name="user">
        <p>password:</p>
        <input type="password" name="pass_reg1">
        <p>confirm password:</p>
        <input type="password" name="pass_reg2">
        <p>email:</p>
        <input type="text" name="email"><br>
        <p><input type="submit" name="register" value="register"></p>
        
    </form>
</body>
</html>

<?php
    include "conn.php";
    if(!empty($_POST['register'])){
        if(empty($_POST['user']) || empty($_POST['pass_reg1']) || empty($_POST['pass_reg2']) || empty( $_POST['email'])){
            echo '<script>alert("信息不完整")</script>';
            exit(0);
        }else if($_POST['pass_reg1']!==$_POST['pass_reg2']){
            echo '<script>alert("两次密码不一致")</script>';
        }else{
            $user = $_POST['user'];
            $pass_reg = $_POST['pass_reg1'];
            $email = $_POST['email'];

            $sql = "insert into users(username,password,email)value($user,$pass_reg,$email)";

            $res = mysqli_query($con,$sql);
            if($res){
                echo '<script>alert("注册成功");</script>';
                header('Location:login.php');
            }
        }
    }
?>