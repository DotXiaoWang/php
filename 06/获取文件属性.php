<?php
    $file = 'test.txt';
    echo '<br>文件名:'."basename($file)";
    $patharr = pathinfo($file);
    echo '<br>文件扩展名：'.$patharr['extension'];
    echo '<br>文件属性:'.filetype($file);
    echo '<br>路径：'.realpath($file);
    echo "<br> 大小:".filesize($file);
    echo "<br> 创建日期：".date('Y-m-d H:i:s',filectime($file));

?>