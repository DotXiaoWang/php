<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liuyanban</title>
    <style  type="text/css">
        
        p{
            color: brown;
        }
        input{
            color: black;
            
        }
      
        

    </style>
</head>
<body>
    <form action="" method="post">
        <p>username:</p>
        <input type="text" name="user">
        <p>password:</p>
        <input type="password" name="pass"><br>

        <input  type="submit" name="login" value="login">
    </form>
    <?php 
    session_start();
    if(isset($_POST['login'])){
        if($_POST['user']==='ptz'&& $_POST['pass']==='123456'){
            $_SESSION['xxxx']=$_POST['user'];
        
            header('Location:index2.php');

        }else{
            
            echo '<script>alert("username or password is wrong!!");</script>';

        }


    }

    ?>

    
</body>
</html>
