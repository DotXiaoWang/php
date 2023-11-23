<meta charset="utf-8"></meta>

<?php
echo "文件上传成功!";
echo "<hr />";
echo "文件上传的信息为"."<br />";
echo "上传文件名：" .$_FILES["file"]["name"]."<br />";
echo "上传文件类型：" .$_FILES["file"]["type"]."<br />";
echo "上传文件大小：" .($_FILES["file"]["size"] / 1024)."Kb<br />";
echo "Temp file：" .$_FILES["file"]["tmp_name"]."<br />";
?>