<?php
$file = 'log.txt';
$connect = 'helloworld';
if(file_put_contents($file,$connect,FILE_APPEND)){
    echo 'success<br />';
}
echo file_get_contents($file);



?>