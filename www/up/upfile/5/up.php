<meta charset="utf-8"></meta>
<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$ext_arr = array('flv','swf','mp3','mp4','3gp','zip','rar','gif','jpg','png','bmp');
	$file_ext = substr($_FILES['file']['name'], strrpos($_FILES['file']['name'],"."+1));

	if(in_array($file_ext,$ext_arr)){
		$tempFile = $_FILES['file']['temp_name'];
		$targetPath = $_GET['jieduan'].rand(10,99).date("YmdHis").".".$file_ext;
		if(move_uploaded_file($tempFile,  $targetPath)){
			echo "上传成功".'<br>';
			echo '路径：'.$targetPath;
		}else{
			echo "上传失败";
		}


	}_else{
		echo "不允许的后缀";
	}

}

?>

<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
	<title>基于GET方式的00阶段饶过</title>
</head>
<body>
	<form action="?jieduan=./upload/" method="POST" enctype="multipart/form-data">
		<label for="file">Filename</label>
		<input type="file" name="file" id="file">
		<br />
		<input type="submit" name="submit" value="submit" />
	</form>

</body>
</html>