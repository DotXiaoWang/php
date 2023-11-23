<meta charset="utf-8"></meta>
<?php
if(isset($_GET['page'])){
	include $_GET['page'];
	echo "<h1 style='color:red'>This is include</h1>";
	include $_GET['page'];
}
else{

	print("sorry");
}
?>