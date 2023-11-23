<meta charset="utf-8"></meta>
<?php
session_start();
unset($_SESSION['admin']);
session_destroy();
?>