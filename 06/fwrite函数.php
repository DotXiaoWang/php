<?php
$file = 'log.txt';
$handle = fopen($file,'w')or die('Cannot open file:'.$file);

$data = 'This is the data';
fwrite($handle,$data);
fclose($handle);

?>