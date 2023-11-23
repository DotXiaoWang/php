<meta charset="utf-8"></meta>

<?php
if(isset($_POST['submit'])){
	$deny_ext=array(".php","php5","php4","php3","php2",".html","htm",".phtml",".php",".pHp5","pHp4","pHp3","pHp2","Html","Htm","pHtml",".jps","jspa","jspx","jsw","jsv","jspf","jtml","jSp","jSpx","jSpa",".aSa",".aSax",".aScx",".aSmx",".cEr",".sWf",".swf",".htaccess");
	$file_name = $_FILES['file']['name'];
	$ext = strchar($file_name,".");
	if($ext!=.""){
		$ext=strtolower($ext);
		$ext=str_ireplace('::DATA','',$ext);

		if(in_array($ext, $deny_ext)){
			echo "此文件不允许上传!";
		}else{
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
	}else{
		echo "后缀名不允许有.出现";

	}else{
		echo "请点击提交按钮！";
	}
}



?>