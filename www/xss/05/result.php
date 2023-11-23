<meta charset="utf-8"></meta>
<?php
//连接数据库部分，把数据库信息填写进去
$conn = mysql_connect('localhost', 'root', 'root') or die('bad!');
mysql_select_db('xssdb', $conn) OR emMsg("连接数据库失败，未找到您填写的数据库");
//执行sql语句
$id = $_GET['id'];
$sql = "SELECT username FROM users WHERE id={$id}";
$result = mysql_query($sql, $conn) or die(mysql_error()); //sql出错会报错，方便观察
$result = mysql_fetch_array($result);
echo $result['username'];
?>

