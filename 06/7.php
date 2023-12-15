<?php 
    $filename  = '1.txt';
    $filename = '1.txt';
    echo filetype($filename);
    echo '<br>';
    echo filetype($dirname);
    echo '<br>';
    echo 'filename:' .basename($filename).'<br>';
    $pathfile = pathinfo($filename).'<br>';
    echo '属性为'.filetype($fielname).'<br>';
    echo '属性为'.realpath($fielname).'<br>';
    echo '属性为'.filesize($fielname).'<br>';
    echo '属性为'.date('Y-m-d H:i:s'.filectime($filename));
    

?>