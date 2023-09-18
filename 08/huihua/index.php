<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言吧界面</title>
</head>
<body>
    <form action="add.php" method='POST'>
        <p>title</p>
        <input type="text" name='title'> 
        <p>content</p>
        <textarea name="content"  cols="50" rows="5"></textarea>
        <br>
        <input type="submit" value='提交' name='submit'>
    </form>
    
</body>
</html>