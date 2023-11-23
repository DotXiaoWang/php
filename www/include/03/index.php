<meta charset="utf-8"></meta>
<?php
if(isset($_GET['page'])){

	include $_GET['page'];


}
else{
	echo "没有包含";
}
?>