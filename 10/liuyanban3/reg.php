<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册界面</title>
</head>
<body>
    <form action="" method="post">
        <p>username</p>
        <input type="text" name="user">
        <p>password</p>
        <input type="password" name="pass1">
        <p>confirm password</p>
        <input type="password" name="pass2" >
        <p>email:</p>
        <input type="text" name="email">
        <br>
        <input type="submit" name="register" name="register"   >

    </form>
    
</body>
</html>
<?php 
    include 'conn.php';
    if(!empty($_POST['register'])){
        if(empty($_POST['user'])||empty($_POST['pass1'])||empty($_POST['pass2'])||empty($_POST['email'])){
            echo '<script>alert("请输入完整的信息")</script>';
            exit();
        }else if($_POST['pass1']!==$_POST['pass2']){
            echo '<script>alert("两次密码不一直")</script>';
            exit();
            
        }else{
            $user = $_POST['user'];
            $pass = $_POST['pass1'];
            $email = $_POST['email'];

            $sql = "insert into users(username,password,email)value($user,$pass,$email)";
            $res = mysqli_query($con,$sql);
            if($res){
                echo "<script>alert('register is sucessful')</script>";
            }


        }
    }

?>