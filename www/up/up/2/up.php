<meta charset="utf-8"></meta>

<?php
if(isset($_POST['submit'])){
$tmpPath = $_FILES['file']['tmp_name'];
	$path = "./upload/".$_FILES['file']['name'];
	if(move_uploaded_file($tmpPath, $path)){
		echo $path;
	}else{
		echo "上传失败,请<a href="up.html">返回首页</a>重新上传!";
		
	}

}else{
	
		echo "您未点击提交按钮,请<a href="up.html">返回首页</a>重新上传!";
}

?>