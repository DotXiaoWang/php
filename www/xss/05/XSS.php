<meta charset="utf-8"></meta>
<?php
$conn = mysql_connect('localhost', 'root', 'root') or die('bad!');
//连接数据库
mysql_select_db('xssdb', $conn) OR enMsg("连接数据库失败");
@$name = addslashes($_POST['xsscode']);
if(isset($_POST['submit'])){
	//传递POSTname值
	$sql = "INSERT INTO users VALUES ('0','".$name."','Sangfor');";
	//输入表值
	$result = mysql_query($sql, $conn) or die(mysql_error());
	//sql出错报错
	echo $result;
}
else{
	echo "未提交数据，请<a href='XSS.html'>返回首页</a>重新提交数据！";
}
?>