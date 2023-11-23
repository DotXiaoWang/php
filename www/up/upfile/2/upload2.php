<meta charset="utf-8"></meta>

<?php
if($_FILES['file']['error']>0){
	echo "Return Code:" .$_FILES['file']['error']."<br />";

}else{
	$info = pathinfo($_FILES['file']['name']);
	$ext = $info['extension'];//得到文件扩展名
	if($ext=="php"){
		exit("不允许的后缀名");
	}
	if(strtolower($ext)=="php"){
		ext("不允许的后缀名");
	}

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
}

?>