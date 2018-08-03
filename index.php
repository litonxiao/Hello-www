<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>第一个PHP页面</title>
<link href="style-start.css" rel="stylesheet" type="text/css">
</head>

<body>
<script type="text/javascript">
	document.write("Hello World !<br> Hello WWW !")
</script>
<br>
<?php
  echo "<h1>欢迎进入PHP网页!<br><h2>当前系统时间：</h2>";
?>
<hr>
<?php
  date_default_timezone_set("PRC");
  echo date("y-m-d h:i:s");
?>
</body>
</html>
