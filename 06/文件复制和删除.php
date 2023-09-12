<?php
    if(copy('text.txt','./data/bak.txt')){//复制文件

        echo '文件复制成功';
        
    }else{
        unlink('.text.txt');
        
    }
?>