<html>
<head>
<title>XSS Payload</title>
<meta charset='utf-8'>
</head>
<body>
	<h1>XSS Payload</h1>
	<form method="post" action="xss.php">
		<textarea 	name="xsscode"
					rows="10"
					cols="50"
		></textarea>
		<br />
		<input type="submit" name="submit" value="提交">
	</form>
</body>
</html>