<meta charset="utf-8"></meta>
<?php
session_start();
var_dump($_SESSION);
if($_SESSION["admin"]===1){
	echo "I know you are administrator!";
}
else {
	echo "I don't konw who you are!";
}

?>