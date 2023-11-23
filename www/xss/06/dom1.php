<meta charset="utf-8"></meta>
<?php
	@$name = $_GET["name"];
?>

<input id="text" type="hidden" value="<?php echo $name;?>" />
<div id="print"></div>
<script>
	var text = document.getElementById("text");
	var print = document.getElementById("print");
	print.innerHTML = text.value;//获取text的值，并且输出在print内。这是导致XSS的主要原因。
</script>