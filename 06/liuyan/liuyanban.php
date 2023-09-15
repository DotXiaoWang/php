<?php
    if(empty($_POST['title'])){
        echo '<script>alert("快跨我帅");window.history.back(-1);</script>';
        return false;


    }else{
        $title = $_POST['title'];
        $content = $_POST['content'];
        $data = 'title:'.$title.'<br>'.'.content:'.$content.'<br>'.PHP_EOL;
        $file = 'liuyanban.txt';

    }
    if(file_put_contents($file,$data,FILE_APPEND)){
        echo '<script>alert("留言成功");</script>';

    }
    $liuyan = file_get_contents($file);
    echo $liuyan;
    
?>