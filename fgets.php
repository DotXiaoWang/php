<?php
$file = fopen('test.txt','r');
while(!feof($file)){
    $str = fgets($file);
    echo $str."<br>";
    fclsoe($file);
    
}


?>