<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>伺服器編譯過的php檔案，開啟原始碼只能看到 html</title>
	</head>

	<body>
		<a href='./'>回首頁</a>
		<h1>
		<?php
			$welcome = "嗨，";
			$myName = "Will Tsai";
			
			echo $welcome . $myName;
		?>
		</h1>
	</body>
</html>
