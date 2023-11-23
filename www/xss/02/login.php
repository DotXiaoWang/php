<meta charset="utf-8"></meta>
<?php
session_start();
$usr = $_POST['username'];
$pwd=$_POST['password'];
if($usr==='admin' && $pwd==='admin')
{
	echo 'login Succesd!';
	$_SESSION["admin"]=1;
	var_dump($_SESSION);
}
else 
{
	echo 'login fail!';
}
?>