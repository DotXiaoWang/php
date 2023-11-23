<meta charset="utf-8"></meta>

<?php
if($_FILES['file']['error']> 0 ){
	echo "Return Code:".$_FILES['file']['error']."<br />";

}else{
	if(($_FILES['file']['type']!="image/gif")&&($_FILES['file']['type']!="image/jpeg")&&
		($_FILES['file']['type']!="image/pjpeg")&&($_FILES['file']['type']!="image/png")){
		echo ("不允许的格式")
	exit($_FILES['file']['type']);
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