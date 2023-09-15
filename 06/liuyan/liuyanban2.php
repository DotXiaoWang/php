<?php
    if(empty($_POST['content'])){//判断留言板内容是否为空
        echo '<script> alert("留言板内容不能为空!");window.history.back(-1);</script>';
        return false;    //中断程序


    }else{      //内容不能为空时
        $zhuti = $_POST['zhuti'];
        $content = $_POST['content'];
        $data = '留言板主题是:'.$zhuti.'<br>'.'留言板内容是:'.$content.'<br>'; //拼接留言内容
        $filename = 'liuyan.txt';//没有创建会话
        if(file_put_contents($filename,$data,FILE_APPEND)){//判断写入成功后
            echo '<script>alert("留言成功")</script>';
           
            
        }   
        $liuyan = file_get_contents($filename);//读取留言板
        echo $liuyan;


    }

?>