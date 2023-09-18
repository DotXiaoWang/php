<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liuyanban1</title>
</head>
<body>
    <form action="add.php">
        <p>Title</p>
        <input type="text" name="title">
        <p>Content</p>
        <textarea name="content"  cols="50" rows="5"></textarea>
        <br>
        <input type='submit' value="submit">

    </form>
    
<?php 
        $con = mysqli_connect('localhost','root','root','test');
        $sql = "select * from liuyanban1";
        $res = mysqli_connect($con,$sql);
        if($res){
            while($row=mysql_fetch_array($res)){
                echo 'title:'.$rows['title'].'content:'.$rows['content'].'<br>';
            }
 
        }
        mysqli_close($con);

?>


</body>
</html>