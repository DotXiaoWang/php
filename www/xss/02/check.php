<meta charset="utf-8"></meta>
<?php
 session_start();
 var_dump($_SESSION);
if($_SESSION["admin"]===1){
	echo "i know you are administrator!";
}
else {
	echo "i don't konw who you are!";
}

?>