<?php 
    $dirname = 'hello';
    if(mkdir($dirname)){
        echo '成功';
    }    else{
        echo '失败';
    }
    
?>
