<html>
	<head>
		<title>内容替换</title>
		<meta charset="utf-8"></meta>
		<script>
			function exchange(){
				document.getElementById("h").innerHTML = document.getElementById("dom_input").value;
			}
		</script>
	</head>
	<body>
		<center>
			<h2 id="h">这里会显示输入的内容</h2>
			<form method="post">
				<input type="text" id="dom_input" value="Sangfor" /><br />
				<input type="button" value="替换" onclick="exchange()" />
			</form>
			<hr />
		</center>
	</body>
</html>

