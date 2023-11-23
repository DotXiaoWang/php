<meta charset="utf-8"></meta>

<?php
if(isset($_POST['submit'])){
	$ext_arr=array(".jpg",".png","gif",".htaccess");
	$info=pathinf($_FILES['file']['name']);
	$ext = $info['extension'];//得到文件扩展名

	$ext = ".".$ext;
	if(in_array($ext, ext_arr)){


		if(file_exists("upload/".$_FILES['file']['name'])){
		echo $_FILES['file']['name']."already exists.";
		}else{
			move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
			echo "Stored in:"."upload/".$_FILES['file']['name'];
			echo "<hr />";
			echo "Upload:".$_FILES['file']['name']."<br />";
			echo "Type:".$_FILES['file']['type']."<br />";
			echo "Size:".($_FILES['file']['size']/1024)."Kb<br />";
			echo "Temp file:".$_FILES['file']['tmp_name']."<br />";
		
		}
	}else{
		echo "此文件不允许上传!";

	}else{
		echo "请点击提交按钮！";
	}




}


?>