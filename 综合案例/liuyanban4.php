<?php
    include  'conn.php';
    if(isset($_POST['login'])){
        $admin_user = $_POST['user'];
        $admin_pass = $_POST['pass'];
        $sql = "select * from admin where username='$admin_user' and where password='$admin_pass'";
        $res = mysqli_query($con,$sql);
        if($rows = mysql_fetch_array($res)){
            header('Location:index.php');
            exit();
            }else{
                echo '<script>alert("username or password is error!")</script>';
            }
        
    }
?>