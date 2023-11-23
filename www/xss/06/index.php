<html>
<head>
	<title>DOM-XSS</title>
	<meta charset="utf-8">
</head>
<body>
<script>
	var a = document.URL;
	a = unescape(a);
	document.write(a.substring(a.indexOf("message=")+8,a.length));
</script>
</body>
</html>