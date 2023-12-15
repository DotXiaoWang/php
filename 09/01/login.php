<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="post">
        <p>username:</p>
        <input type="text" name="user">
        <p>password:</p>
        <input type="password" name="pass">
        <br>
        <input type="submit" value="login" name="submit">

    </form>
</body>
</html>
<?php 
    // if(empty($_POST['user'])||empty($_POST['pass']))
    // {
    //     echo '<script>alert("empty!!");window.history.back(-1);';

    // }
    if(isset($_POST['submit'])){
        if($_POST['user']=='ptz'&&$_POST['pass']=='zhilian'){
            setcookie('cookiename',$_POST['user'],time()+3600);
            header('Location:index.php');
        }else{
            echo '<script>alert("empty!!");window.history.back(-1);</script>';
        }
    }
    
?>